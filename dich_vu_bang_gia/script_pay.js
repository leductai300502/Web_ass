
// localStorage.clear();
///////////// add to bag ///////////
function loadCart(){    
    let shoesInfo = localStorage.getItem('shoesInfo') ? JSON.parse(localStorage.getItem('shoesInfo')) : [];
    shoesInfo.forEach(function(shoe,index){
        addCart(shoe.name, shoe.price, shoe.size, shoe.id, shoe.image, shoe.amount);
    })
    cartTotal();
    var inputValue = document.querySelectorAll('tbody tr td input');
    inputValue.forEach((item, index) => {
        item.addEventListener('click',function(event){
            shoesInfo[index].amount = item.value;
            //console.log(shoesInfo[index]);
            localStorage.setItem('shoesInfo', JSON.stringify(shoesInfo));
            cartTotal();
            delete_info_shoe();
            get_info_shoe();
        })
    })
    //console.log("load")
    delete_info_shoe();
    get_info_shoe();
}

function addCart(nameShoe, priceShoe, chooseSize, idShoe, imageShoe, amount){
    var addtr = document.createElement("tr");
    addtr.classList.add('border-b-2');
    var cartItem = document.querySelectorAll('tbody tr');  
    var input = document.querySelectorAll('tbody tr td input'); 
    var size = document.querySelectorAll('tbody tr td span');
    var name = document.querySelectorAll('tbody tr td div');
    //console.log("name1 = " + nameShoe);
    for (var i = 0; i < cartItem.length; i++){                
        if(size[i].innerHTML == chooseSize && name[i].innerHTML == nameShoe){
            //console.log(name[i].innerHTML);
            var inputValue = input[i];
            inputValue.value++;
            return;
        }
    }
    var trContent = '<td class="flex align-center text-center py-4"><img class="h-16 w-16" src="'+imageShoe+'" alt=""><div>'+nameShoe+'</div></td><td class="text-center"><p class="price">'+priceShoe+'</p></td><td class="text-center"><span>'+chooseSize+'</span></td><td class="text-center"><input class="amount w-16" type="number" value="'+amount+'" min="0"></td><td class="text-center"><a onclick="deleteShoe('+chooseSize+','+idShoe+')">Delete</a></td>'
    addtr.innerHTML = trContent;
    var carTable = document.querySelector("tbody");
    carTable.append(addtr);
}

function cartTotal(){
    var totalPrice = 0;
    var cartItem = document.querySelectorAll('tbody tr');
    
    for (var i = 0; i < cartItem.length; i++){
        
        var inputsValue = document.querySelectorAll('tbody tr td input');
        var inputValue = inputsValue[i].value;
        var productsPrice = document.querySelectorAll('.price');
        var productPrice = productsPrice[i].innerHTML
        var totalPrice = totalPrice + inputValue*productPrice;
        //console.log(inputValue, productPrice, totalPrice);
    }
    var sumCartItem = document.querySelector('.sum span');
    sumCartItem.innerHTML = totalPrice;
    var sumCartItem1 = document.querySelector('#total_price');
    sumCartItem1.value = totalPrice;
}

function deleteShoe(size1, id1){
    let shoesInfo = localStorage.getItem('shoesInfo') ? JSON.parse(localStorage.getItem('shoesInfo')) : [];
        shoesInfo = shoesInfo.filter(shoe => isnotShoe(shoe.size, shoe.id, size1, id1));
        //console.log(shoesInfo); 
        localStorage.setItem('shoesInfo', JSON.stringify(shoesInfo));
        var carTable = document.querySelectorAll("tbody tr");
    //console.log(carTable)
    carTable.forEach(item => item.remove())   
    loadCart();
} 

function isnotShoe(size, id, size1, id1){
    if (size != size1 || id != id1){
        return true;
    }
    return false;
} 

function get_info_shoe(){
    let shoesInfo = localStorage.getItem('shoesInfo') ? JSON.parse(localStorage.getItem('shoesInfo')) : [];
    shoesInfo.forEach(function(shoe,index){
        //console.log(shoe.name);
        var add_input_name = document.createElement("input");
        add_input_name.setAttribute("type", "hidden");
        add_input_name.setAttribute("value",shoe.name);
        add_input_name.setAttribute("name", "name_shoes[]");

        var add_input_size = document.createElement("input");
        add_input_size.setAttribute("type", "hidden");
        add_input_size.setAttribute("value",shoe.size);
        add_input_size.setAttribute("name", "size_shoes[]");

        var add_input_amount = document.createElement("input");
        add_input_amount.setAttribute("type", "hidden");
        add_input_amount.setAttribute("value",shoe.amount);
        add_input_amount.setAttribute("name", "amount_shoes[]");

        var infoshoe = document.querySelector("#infoshoe");
        infoshoe.append(add_input_name);
        infoshoe.append(add_input_size);
        infoshoe.append(add_input_amount);
    })
}

function delete_info_shoe(){
    var infoshoe = document.querySelectorAll("#infoshoe input");
    infoshoe.forEach(item => item.remove());
}
