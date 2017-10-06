<?php

namespace App\Services;

use Google\Cloud\Vision\VisionClient;

class VisionService
{
    public function getImageText($image): string {
        // TODO
        # Your Google Cloud Platform project ID
        $projectId = 'rackian-php-vision';

        # Instantiates a client
        $vision = new VisionClient([
            'projectId' => $projectId
        ]);

        # The name of the image file to annotate
        $fileName = 'images/test.png';

        # Prepare the image to be annotated
        $imageResult = $vision->image(fopen($image, 'r'), [
            'DOCUMENT_TEXT_DETECTION'
        ]);

        # Performs label detection on the image file
        $text = $vision->annotate($imageResult)->fullText()->text();

        return $text;
    }
}
