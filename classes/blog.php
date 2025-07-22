<?php
class Blog {
    private $apiKey = '305afa3efb0bd71e4d60d1c380470975';

    public function getNoticias($categoria = 'technology', $lang = 'pt', $pais = 'br') {
        $url = "https://gnews.io/api/v4/top-headlines?category=$categoria&lang=$lang&country=$pais&apikey={$this->apiKey}";

        $response = wp_remote_get($url);

        if (is_array($response) && !is_wp_error($response)) {
            $body = wp_remote_retrieve_body($response);
            $data = json_decode($body);
            return $data->articles ?? [];
        }

        return [];
    }
}