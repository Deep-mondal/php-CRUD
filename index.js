function uuid(){
   var a=Math.floor(Math.random()*10);
   var b;
   switch(a){
    case 0:b='c';
    case 1:b='o';
    case 2:b='n';
    case 3:b='s';
    case 4:b='o';
    case 5:b='n';
    case 6:b='e';
    case 7:b='n';
    case 8:b='t';
    case 9:b='e';
   }
   //alert('Registered\nInformation saved for future use'+'\nYour UUID:'+'$'+a+'000'+b);
   //console.log('Registered\nInformation saved for future use'+'\nYour UUID:'+'$'+a+'000'+b);
}
uuid();