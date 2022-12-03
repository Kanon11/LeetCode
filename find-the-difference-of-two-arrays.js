var findDifference = function (nums1, nums2) {
    let ans1 = new Set();
    let ans2 = new Set();
    for (let i = 0; i < nums1.length; i++) {
        if (!nums2.includes(nums1[i])) {
            ans1.add(nums1[i]);
        }
        
    }
    for (let i = 0; i < nums2.length; i++) {
        if (!nums1.includes(nums2[i])) {
            ans2.add(nums2[i]);
        }
        
    }
    return [Array.from(ans1), Array.from(ans2)];

};
let nums1 = [1, 2, 3, 3];
let nums2 = [1, 1, 2, 2];
console.log(findDifference(nums1, nums2));
