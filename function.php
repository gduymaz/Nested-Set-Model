<?php

/**
 * ClusterArray class.
 *
 * @author Görkem Duymaz <gorkemduymaz@gmail.com>
 */
class ClusterArray
{
    public $table_id = 'parent_id';

    /**
     * Make array recursive and cluster
     *
     * @param array $elements
     * @param int $recursive
     * @param int $max
     * @param int $depth
     * @return array
     */
    public function cluster(array $elements, $recursive = 0, $max = 0, $depth = 0)
    {

        foreach ($elements as $element) {
            if (!isset($parentId)) {
                $parentId = $element[$this->table_id];
            } elseif ($element[$this->table_id] < $parentId) {
                $parentId = $element[$this->table_id];
            }
        }
        $cluster = $this->buildTree($elements, $parentId, $max, $depth);

        if ($recursive) {
            return $cluster;
        }
        $cluster = $this->unBuildTree($cluster);
        return $cluster;
    }


    /**
     *  Re-sort array non recursive
     *
     * @param $elements
     * @param array $branch
     * @return array
     */
    public function unBuildTree($elements, $branch = [])
    {
        foreach ($elements as $element) {
            if (isset($element['children'])) {

                $branch = $this->unBuildTree($element['children'], $branch);

                unset($element['children']);

            }
            $branch[] = $element;
        }
        return $branch;
    }

    /**
     * Sort array as recursive
     *
     * @param array $elements
     * @param $parentId
     * @param int $max
     * @param int $depth
     * @return array
     */
    public function buildTree(array $elements, $parentId, $max = 0, $depth = 0)
    {
        $branch = array();

        foreach ($elements as $element) {

            if ($element[$this->table_id] == $parentId) {

                $element['lft'] = $max = $max + 1;
                $element['rgt'] = $max + 1;
                $element['depth'] = $depth;
                $children = $this->buildTree($elements, $element['id'], $max, $depth + 1);
                if ($children) {
                    $element['rgt'] = $max = end($children)['rgt'] + 1;
                    $element['children'] = $children;
                } else {
                    $element['rgt'] = $max = $max + 1;
                }
                $branch[] = $element;
            }
        }

        return $branch;
    }
}