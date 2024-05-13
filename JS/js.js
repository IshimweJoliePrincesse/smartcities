const demoArray = [1, 2, 3, 4, 1, 2, 3, 5, 6, 7, 8, 9];

//the sum
const sum = oneD_arrays_simplified.sum(demoArray);

//maximum value in the array
const maximum = oneD_arrays_simplified.maximum(demoArray);

//minimum value in the array
const minimum = oneD_arrays_simplified.minimum(demoArray);

//the average
const average = oneD_arrays_simplified.average(demoArray);

//arrange them in ascending order
const ascending = oneD_arrays_simplified.ascending(demoArray);

//arrange them in descending order
const descending = oneD_arrays_simplified.descending(demoArray);

//Reverse the order of the values
const reverse = oneD_arrays_simplified.reverse(demoArray);

//check if a certain value exists in the array
const demoNum = 4;
const exists = oneD_arrays_simplified.valueInArr(demoArray, demoNum);

//remove duplicates from the array
const noDuplicates = oneD_arrays_simplified.removeDuplicates(demoArray);

//find the index of a value
const index = oneD_arrays_simplified.findIndexOf(demoArray, demoNum);

//slice the array
//get the first 3 values
const first3Values = oneD_arrays_simplified.slice(demoArray, 3);

//get the last 4 values, make sure you make the number negative
const last4Values = oneD_arrays_simplified.slice(demoArray, -4);

//concatenate 2 arrays
const arr1 = [1, 2, 3, 4, 5];
const arr2 = [2, 3, 4, 5, 4];
const concatenatedArray = oneD_arrays_simplified.concat(arr1, arr2);

//check if all values meet a certain condition
//this is to check if numbers are even
const condition = (n) => {
  return n % 2 === 0;
};
const allMeetCondition = oneD_arrays_simplified.satisfyCondition(
  demoArray,
  condition
);

//check if atlease one value meets a given condition
const oneMeetsCondition = oneD_arrays_simplified.oneSatisfyCondition(
  demoArray,
  condition
);

//find the index of the last occurrence of a number
const lastIndexofValue = oneD_arrays_simplified.lastOccurrenceOf(
  demoArray,
  demoNum
);

//flatten multdimensional arrays into a one dimensional array
const multdimensional = [
  [1, 2, 3, 4],
  [5, 6, 7, 7],
];
const flattened = oneD_arrays_simplified.flatten(multdimensional);
