var products = [{
        name: "French-Fries",
        burger: false,
        snacks: true,
        drinks: true,
        price: 1.99
    },
    {
        name: "Single-Beef Burger",
        burger: false,
        snack: true,
        drinks: true,
        price: 2.35
    },
    {
        name: "Double-Beef Burger",
        burger: true,
        snack: false,
        drinks: false,
        price: 10.00
    },
    {
        name: "Mexican Chicken Burger",

        burger: true,
        snack: false,
        drinks: false,
        price: 0.75
    },
    {
        name: "Sprite",

        burger: false,
        snack: false,
        drinks: true,
        price: 1.00
    },
    {
        name: "Coke-Cola",

        burger: false,
        snack: true,
        drinks: false,
        price: 15.00
    },
    {
        name: "Lemon-Pepper chicken-wings",

        burger: false,
        snack: true,
        drinks: false,
        price: 12.00
    },
    {
        name: "Blueberries Milkshake",
        burger: false,
        snack: true,
        drinks: false,
        price: 2.75
    },
    {
        name: "Fish-Burger",
        burger: true,
        snack: false,
        drinks: false,
        price: 20.00
    },
    {
        name: "BBQ chicken-wings",
        burger: false,
        snack: true,
        drinks: false,
        price: 3.75
    }
];


function restrictListProducts(prods, restriction) {
    let product_names = [];
    for (let i = 0; i < prods.length; i += 1) {

        if ((restriction == "burger") && (prods[i].burger == true)) {
            product_names.push(prods[i].name);
        } else if ((restriction == "snack") && (prods[i].snack == true)) {
            product_names.push(prods[i].name);
        } else if ((restriction == "drinks") && (prods[i].drinks == true)) {
            product_names.push(prods[i].name);
        } else if ((restriction == "None")) {
            product_names.push(prods[i].name);
        }
    }

    return product_names;


}


// Calculate the total price of items, with received parameter being a list of products
function getTotalPrice(chosenProducts) {
    totalPrice = 0;
    for (let i = 0; i < products.length; i += 1) {
        if (chosenProducts.indexOf(products[i].name) > -1) {
            totalPrice += products[i].price;
        }
    }
    return totalPrice;
}

function getDiscountPrice(chosenProducts) {
    totalPrice = 0;
    discountPrice=0;
    for (let i = 0; i < products.length; i += 1) {
        if (chosenProducts.indexOf(products[i].name) > -1) {
            totalPrice += products[i].price;
        }
    }
    discountPrice=totalPrice*0.85;
    return discountPrice;
}