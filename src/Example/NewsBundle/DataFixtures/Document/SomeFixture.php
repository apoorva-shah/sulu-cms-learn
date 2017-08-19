<?php
// YourBundle/DataFixtures/Document/SomeFixture.php

namespace Example\NewsBundle\DataFixtures\Document;

use Sulu\Component\DocumentManager\DocumentManager;
use Sulu\Bundle\DocumentManagerBundle\DataFixtures\DocumentFixtureInterface;
use Sulu\Component\Content\Document\WorkflowStage;

class SomeFixture implements DocumentFixtureInterface
{
    public function getOrder()
    {
        return 10;
    }

    public function load(DocumentManager $documentManager)
    {
        $document = $documentManager->create('page');

        /** @var \Sulu\Bundle\ContentBundle\Document\PageDocument $document */
        $document = $documentManager->create('page');
        $document->setLocale('en');
        $document->setTitle('FUCK');
        $document->setStructureType('default');
        $document->setResourceSegment('/foo-bar-page');
        $document->setWorkflowStage(WorkflowStage::PUBLISHED);
        $document->getStructure()->bind(array(
            'title' => 'foo bar page'
        ));

        $document->setExtension(
            'excerpt',
            [
                'title' => 'foo title',
                'description' => 'bar description',
                'categories' => [],
                'tags' => []
            ]
        );

        $documentManager->persist($document, 'en', array(
            'parent_path' => '/cmf/sulu_io/contents',
        ));

        # Optional: If you don't want your document to be published, remove this line
        $documentManager->publish($document, 'en');
        $documentManager->flush();
    }
}