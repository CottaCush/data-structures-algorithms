class Solution:
    def isAnagram(self, s: str, t: str) -> bool:
        s_len = len(s)
        t_len = len(t)
        
        if s_len != t_len:
            return False
        else:
            if sorted(s) != sorted(t):
                return False
            else:
                return True