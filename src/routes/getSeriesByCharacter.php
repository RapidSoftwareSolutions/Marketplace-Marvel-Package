<?php
$app->post('/api/Marvel/getSeriesByCharacter', function ($request, $response, $args) {
    $settings = $this->settings;

    //checking properly formed json
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['publicKey', 'privateKey', 'characterId']);
    if (!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback'] == 'error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }
    //forming request to vendor API
    $query_str = $settings['api_url'] . "v1/public/characters/" . $post_data['args']['characterId'] . '/series';
    $body = array();
    $body['apikey'] = $post_data['args']['publicKey'];
    $body['hash'] = md5(time() . $post_data['args']['privateKey'] . $post_data['args']['publicKey']);
    $body['ts'] = time();

    if (isset($post_data['args']['title']) && strlen($post_data['args']['title']) > 0) {
        $body['title'] = $post_data['args']['title'];
    }
    if (isset($post_data['args']['titleStartsWith']) && strlen($post_data['args']['titleStartsWith']) > 0) {
        $body['titleStartsWith'] = $post_data['args']['titleStartsWith'];
    }
    if (isset($post_data['args']['startYear']) && strlen($post_data['args']['startYear']) > 0) {
        $body['startYear'] = $post_data['args']['startYear'];
    }
    if (isset($post_data['args']['modifiedSince']) && strlen($post_data['args']['modifiedSince']) > 0) {
        $body['modifiedSince'] = $post_data['args']['modifiedSince'];
    }
    if (isset($post_data['args']['creators']) && strlen($post_data['args']['creators']) > 0) {
        $body['creators'] = $post_data['args']['creators'];
    }
    if (isset($post_data['args']['events']) && strlen($post_data['args']['events']) > 0) {
        $body['events'] = $post_data['args']['events'];
    }
    if (isset($post_data['args']['comics']) && strlen($post_data['args']['comics']) > 0) {
        $body['comics'] = $post_data['args']['comics'];
    }
    if (isset($post_data['args']['stories']) && strlen($post_data['args']['stories']) > 0) {
        $body['stories'] = $post_data['args']['stories'];
    }
    if (isset($post_data['args']['seriesType']) && strlen($post_data['args']['seriesType']) > 0) {
        $body['seriesType'] = $post_data['args']['seriesType'];
    }
    if (isset($post_data['args']['contains']) && strlen($post_data['args']['contains']) > 0) {
        $body['contains'] = $post_data['args']['contains'];
    }
    if (isset($post_data['args']['orderBy']) && strlen($post_data['args']['orderBy']) > 0) {
        $body['orderBy'] = $post_data['args']['orderBy'];
    }
    if (isset($post_data['args']['limit']) && strlen($post_data['args']['limit']) > 0) {
        $body['limit'] = $post_data['args']['limit'];
    }
    if (isset($post_data['args']['offset']) && strlen($post_data['args']['offset']) > 0) {
        $body['offset'] = $post_data['args']['offset'];
    }


    //requesting remote API
    $client = new GuzzleHttp\Client();

    try {

        $resp = $client->request('GET', $query_str, [
            'query' => $body
        ]);

        $responseBody = $resp->getBody()->getContents();
        $rawBody = json_decode($resp->getBody());
        $errorSet = $rawBody->success;

        $all_data[] = $rawBody;
        if ($response->getStatusCode() == '200' && $errorSet === null) {
            $result['callback'] = 'success';
            $result['contextWrites']['to'] = is_array($all_data) ? $all_data : json_decode($all_data);
        } else {
            $result['callback'] = 'error';
            $result['contextWrites']['to']['status_code'] = 'API_ERROR';
            $result['contextWrites']['to']['status_msg'] = is_array($responseBody) ? $responseBody : json_decode($responseBody);
        }

    } catch (\GuzzleHttp\Exception\ClientException $exception) {
        $responseBody = $exception->getResponse()->getReasonPhrase();
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'API_ERROR';
        $result['contextWrites']['to']['status_msg'] = $responseBody;

    } catch (GuzzleHttp\Exception\ServerException $exception) {

        $responseBody = $exception->getResponse()->getBody(true);
        $result['callback'] = 'error';
        $result['contextWrites']['to'] = json_decode($responseBody);

    } catch (GuzzleHttp\Exception\BadResponseException $exception) {

        $responseBody = $exception->getResponse()->getBody(true);
        $result['callback'] = 'error';
        $result['contextWrites']['to'] = json_decode($responseBody);

    }


    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});