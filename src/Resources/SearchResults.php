<?php

namespace Devio\Pipedrive\Resources;

use Devio\Pipedrive\Resources\Basics\Resource;
use Devio\Pipedrive\Resources\Traits\DisablesFind;

class SearchResults extends Resource
{
    /**
     * Enabled abstract methods.
     *
     * @var array
     */
    protected $enabled = [];

    /**
     * Search.
     *
     * @param       $term
     * @param array $options
     * @return mixed
     */
    public function search($term, $options = [])
    {
        array_set($options, 'term', $term);

        return $this->request->get('', $options);
    }

    /**
     * Search from a specific field.
     *
     * @param       $term
     * @param       $field_type
     * @param       $field_key
     * @param array $options
     * @return mixed
     */
    public function searchFromField($term, $field_type, $field_key, $options = [])
    {
        $options = array_merge(compact('term', 'field_type', 'field_key'), $options);

        return $this->request->get('field', $options);
    }
}
