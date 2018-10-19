var number = document.querySelector(".calc-text input");
var press = document.querySelectorAll(".calc-buttons a");
if(number) {
    for (var i = 0; i < press.length; ++i) {
        press[i].addEventListener("click", function() {
            var clickedItem = e.currentTarget;

            if (number.value == '0'){
                number.value = '';
            }
            
            var pressval = clickedItem.getAttribute("data-value");

            number.value += pressval;

        })
    }
}

// var inputField = document.querySelector(".calculator-box .top-box-numbers input");
// var btn = document.querySelectorAll(".button");
// console.log(btn);
// for (var l = 0; l < btn.length; ++l) {
//     btn[l].addEventListener('click', function () {
//         var clickedItem = e.currentTarget;

//         if (inputField.value == '0'){
//             inputField.value = '';
//         }

//         var btnval = clickedItem.getAttribute("data-value");
//         console.log(btnval);
        
//         inputField.value += btnval;
//     })
// }