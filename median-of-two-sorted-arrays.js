var findMedianSortedArrays = function (nums1, nums2) {
    let l1 = nums1.length - 1;
    let l2 = nums2.length - 1;
    let i = 0;
    let j = 0;
    let ans = [];
    while (i <= l1 && j <= l2) {
        if (nums1[i] <= nums2[j]) {
            ans.push(nums1[i]);
            i++;
        }
        else {
            ans.push(nums2[j]);
            j++;
        }
    }
    if (i <= l1) {
        for (let k = i; k <= l1; k++){
            ans.push(nums1[k]);
        }
    }
    if (j <= l2) {
        for (let k = j; k <= l2; k++){
            ans.push(nums2[k]);
        }
    }
    let ans_length = ans.length;
    if (ans_length % 2 != 0) {
        return ans[parseInt(ans_length / 2)];
    }
    else {
        return (ans[parseInt(ans_length/2)]+ans[parseInt(ans_length/2)-1])/2
    }
    
};

let nums1 = [1,3];
let nums2 = [2];
console.log(findMedianSortedArrays(nums1, nums2));