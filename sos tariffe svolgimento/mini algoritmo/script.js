var firstarray = [];
var secondarray = [];
var mergearray = [];
for (i = 0; i < 10; i++) {
    var random1 = Math.floor(Math.random() * 10);
    var random2 = Math.floor(Math.random() * 10);
    firstarray.push(random1);
    secondarray.push(random2);
}
    console.log(firstarray);
    console.log(secondarray);
 for(i=0;i<firstarray.length;i++){
     for(j=0;j<secondarray.length;j++){
         if(firstarray[i]==secondarray[j]){
             var found = false;
            for (k = 0; k < mergearray.length; k++) {
                if(mergearray[k] == firstarray[i]) {
                    found = true;
                }
            }
            if (found == false ) {
                mergearray.push(firstarray[i]);
            }
         }
     }
 }
 console.log(mergearray);