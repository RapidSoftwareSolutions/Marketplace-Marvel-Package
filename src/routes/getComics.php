<?php
$app->post('/api/Marvel/getComics', function ($request, $response, $args) {
    $settings = $this->settings;

    //checking properly formed json
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['publicKey', 'privateKey']);
    if (!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback'] == 'error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }
    //forming request to vendor API
    $query_str = $settings['api_url'] . "v1/public/comics";
    $body = array();
    $body['apikey'] = $post_data['args']['publicKey'];
    $body['hash'] = md5(time() . $post_data['args']['privateKey'] . $post_data['args']['publicKey']);
    $body['ts'] = time();

    if (isset($post_data['args']['format']) && strlen($post_data['args']['format']) > 0) {
        $body['format'] = $post_data['args']['format'];
    }
    if (isset($post_data['args']['formatType']) && strlen($post_data['args']['formatType']) > 0) {
        $body['formatType'] = $post_data['args']['formatType'];
    }
    if (isset($post_data['args']['noVariants']) && strlen($post_data['args']['noVariants']) > 0) {
        $body['noVariants'] = $post_data['args']['noVariants'];
    }
    if (isset($post_data['args']['dateDescriptor']) && strlen($post_data['args']['dateDescriptor']) > 0) {
        $body['dateDescriptor'] = $post_data['args']['dateDescriptor'];
    }
    if (isset($post_data['args']['dateRange']) && strlen($post_data['args']['dateRange']) > 0) {
        $body['dateRange'] = implode(',', $post_data['args']['dateRange']);
    }
    if (isset($post_data['args']['title']) && strlen($post_data['args']['title']) > 0) {
        $body['title'] = $post_data['args']['title'];
    }
    if (isset($post_data['args']['titleStartsWith']) && strlen($post_data['args']['titleStartsWith']) > 0) {
        $body['titleStartsWith'] = $post_data['args']['titleStartsWith'];
    }
    if (isset($post_data['args']['startYear']) && strlen($post_data['args']['startYear']) > 0) {
        $body['startYear'] = $post_data['args']['startYear'];
    }
    if (isset($post_data['args']['issueNumber']) && strlen($post_data['args']['issueNumber']) > 0) {
        $body['issueNumber'] = $post_data['args']['issueNumber'];
    }
    if (isset($post_data['args']['diamondCode']) && strlen($post_data['args']['diamondCode']) > 0) {
        $body['diamondCode'] = $post_data['args']['diamondCode'];
    }
    if (isset($post_data['args']['digitalId']) && strlen($post_data['args']['digitalId']) > 0) {
        $body['digitalId'] = $post_data['args']['digitalId'];
    }
    if (isset($post_data['args']['upc']) && strlen($post_data['args']['upc']) > 0) {
        $body['upc'] = $post_data['args']['upc'];
    }
    if (isset($post_data['args']['isbn']) && strlen($post_data['args']['isbn']) > 0) {
        $body['isbn'] = $post_data['args']['isbn'];
    }
    if (isset($post_data['args']['ean']) && strlen($post_data['args']['ean']) > 0) {
        $body['ean'] = $post_data['args']['ean'];
    }
    if (isset($post_data['args']['issn']) && strlen($post_data['args']['issn']) > 0) {
        $body['issn'] = $post_data['args']['issn'];
    }
    if (isset($post_data['args']['hasDigitalIssue']) && strlen($post_data['args']['hasDigitalIssue']) > 0) {
        $body['hasDigitalIssue'] = $post_data['args']['hasDigitalIssue'];
    }
    if (isset($post_data['args']['modifiedSince']) && strlen($post_data['args']['modifiedSince']) > 0) {
        $body['modifiedSince'] = $post_data['args']['modifiedSince'];
    }
    if (isset($post_data['args']['creators']) && strlen($post_data['args']['creators']) > 0) {
        $body['creators'] = implode(',', $post_data['args']['creators']);
    }
    if (isset($post_data['args']['characters']) && strlen($post_data['args']['characters']) > 0) {
        $body['characters'] = implode(',', $post_data['args']['characters']);
    }
    if (isset($post_data['args']['series']) && strlen($post_data['args']['series']) > 0) {
        $body['series'] = implode(',', $post_data['args']['series']);
    }
    if (isset($post_data['args']['events']) && strlen($post_data['args']['events']) > 0) {
        $body['events'] = implode(',', $post_data['args']['events']);
    }
    if (isset($post_data['args']['stories']) && strlen($post_data['args']['stories']) > 0) {
        $body['stories'] = implode(',', $post_data['args']['stories']);
    }
    if (isset($post_data['args']['sharedAppearances']) && strlen($post_data['args']['sharedAppearances']) > 0) {
        $body['sharedAppearances'] = $post_data['args']['sharedAppearances'];
    }
    if (isset($post_data['args']['collaborators']) && strlen($post_data['args']['collaborators']) > 0) {
        $body['collaborators'] = $post_data['args']['collaborators'];
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