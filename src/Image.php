<?php

namespace Graphp\GraphViz;

use Graphp\Graph\Graph;

class Image
{
    private $graphviz;

    public function __construct(GraphViz $graphviz = null)
    {
        if ($graphviz === null) {
            $graphviz = new GraphViz();
            $graphviz->setFormat('png');
        }

        $this->graphviz = $graphviz;
    }

    public function getOutput(Graph $graph)
    {
        return $this->graphviz->createImageData($graph);
    }

    /**
     * set the image output format to use
     *
     * @param string $type png, svg
     * @return self $this (chainable)
     * @uses GraphViz::setFormat()
     */
    public function setFormat($type)
    {
        $this->graphviz->setFormat($type);
        return $this;
    }
}
