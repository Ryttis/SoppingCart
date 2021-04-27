# Shopping cart app

## Technical Environment

- PHP7.4.14 +
- `Composer` for autoloading is used
- 3rd party libraries:
  - laminas/laminas-config
    
- App can be executed from console 

## Optional  requirements: 

- Unit tests
- Integration tests
- Ability to launch whole app with docker
  
  not yet implemented.


### Requirements 

- Supported currencies `EUR`, `USD` and `GBP` 
- The shopping cart's default currency is `EUR` 
- Exchange rates for currencies: `EUR:USD` - `1:1.14`, `EUR:GBP` - `1:0.88`

are implemented on abstarct level

Input data is stored in text file input.txt

SoppingCart class contains following fields:

id   - Unique product identifier
name - Product name
quantity = Product quantity
price - Product price
currency - Product's price currency as CartCurrency extended from AbstarctCurrency


