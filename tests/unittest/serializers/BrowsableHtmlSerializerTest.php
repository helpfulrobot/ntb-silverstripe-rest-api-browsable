<?php

class BrowsableHtmlSerializerTest extends SapphireTest {

    public function testDefaultHtmlSerializerIsDeactivated() {
        $serializer = new HtmlSerializer();
        $this->assertFalse($serializer->active());
    }

    public function testGetBrowsableHtmlSerializerFromFactory() {
        $serializer = SerializerFactory::create('text/html');
        $this->assertEquals('BrowsableHtmlSerializer', get_class($serializer));
    }

}