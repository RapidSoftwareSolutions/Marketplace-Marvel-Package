<?php

namespace Test\Functional;

require_once(__DIR__ . '/../../src/Models/checkRequest.php');
class MarvelTest extends BaseTestCase {

    public function testListMetrics() {

        $routes = [
            'getSeriesByStory',
            'getEventsByStory',
            'getCreatorsByStory',
            'getComicsByStory',
            'getCharactersByStory',
            'getSingleStory',
            'getStories',
            'getStoriesBySeries',
            'getEventsBySeries',
            'getCreatorsBySeries',
            'getComicsBySeries',
            'getCharactersBySeries',
            'getSingleSeries',
            'getSeries',
            'getStoriesByEvent',
            'getSeriesByEvent',
            'getCreatorsByEvent',
            'getComicsByEvent',
            'getCharactersByEvent',
            'getSingleEvent',
            'getEvents',
            'getStoriesByCreator',
            'getSeriesByCreator',
            'getEventsByCreator',
            'getComicsByCreator',
            'getSingleCreator',
            'getCreators',
            'getStoriesByComic',
            'getEventsByComic',
            'getCreatorsByComic',
            'getCharactersByComic',
            'getSingleComic',
            'getComics',
            'getStoriesByCharacter',
            'getSeriesByCharacter',
            'getEventsByCharacter',
            'getComicsByCharacter',
            'getSingleCharacter',
            'getCharacters'

        ];

        foreach($routes as $file) {
            $var = '{  
                    }';
            $post_data = json_decode($var, true);

            $response = $this->runApp('POST', '/api/Marvel/'.$file, $post_data);

            $this->assertEquals(200, $response->getStatusCode(), 'Error in '.$file.' method');
        }
    }

}
