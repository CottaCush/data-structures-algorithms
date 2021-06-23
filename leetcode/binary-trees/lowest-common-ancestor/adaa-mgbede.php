<?php

class Solution {
    /**
     * @param TreeNode $root
     * @param TreeNode $p
     * @param TreeNode $q
     * @return TreeNode
     */
    function lowestCommonAncestor($root, $p, $q) {
        if(!$root) return null;

        if($root->val == $p->val || $root->val == $q->val) {
            return $root;
        }

        $left = $this->lowestCommonAncestor($root->left, $p, $q);
        $right = $this->lowestCommonAncestor($root->right, $p, $q);

        if(!$left) return $right;
        if(!$right) return $left;
        return $root;
    }
}