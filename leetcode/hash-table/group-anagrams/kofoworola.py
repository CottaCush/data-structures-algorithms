class Solution:
    def groupAnagrams(self, strs):
        store = {}
        arrange = ''.join(sorted(strs[0]))
        store[arrange] = [strs[0]]
        counter = 1
        while counter < len(strs):
            arrange = ''.join(sorted(strs[counter]))

            if store.get(arrange):
                store[arrange].append(strs[counter])
            else:
                store[arrange] = [strs[counter]]
                
            counter += 1
            
        return store.values()