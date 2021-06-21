class TreeNode:
    def __init__(self, val=0, left=None, right=None):
        self.val = val
        self.left = left
        self.right = right
        
class Solution:
    def mergeTrees(self, root1: TreeNode, root2: TreeNode) -> TreeNode:
        if root1 is None and root2 is None:
            return 
            
        if root1 is None and root2 is not None:
            mergedTree = TreeNode(root2.val)
            mergedTree.left = self.mergeTrees(root1, root2.left)
            mergedTree.right = self.mergeTrees(root1, root2.right)
            return mergedTree
        
        elif root1 is not None and root2 is None:
            mergedTree = TreeNode(root1.val)
            mergedTree.left = self.mergeTrees(root1.left, root2)
            mergedTree.right = self.mergeTrees(root1.right, root2)
            return mergedTree
        
        else:
            mergedTree = TreeNode(root1.val + root2.val)
            mergedTree.left = self.mergeTrees(root1.left, root2.left)
            mergedTree.right = self.mergeTrees(root1.right, root2.right)
            return mergedTree