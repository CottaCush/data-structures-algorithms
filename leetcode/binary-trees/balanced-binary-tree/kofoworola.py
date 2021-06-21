class Solution:
    def isBalanced(self, root):
        height = self.findHeight(root)
        if type(height) == type(1):
            return True
        else:
            return False
        
    def findHeight(self, root):
        if root is None:
            return -1
        if root.left is None and root.right is None:
            return 0
        if root.left is not None or root.right is not None:
            height = 1
            lheight = self.findHeight(root.left)
            rheight = self.findHeight(root.right)
            if type(lheight) == type(False) or type(rheight) == type(False):
                return False
            if abs(lheight - rheight) == 0 or abs(lheight - rheight) == 1:
                return height + max(lheight, rheight)
            else:
                return False