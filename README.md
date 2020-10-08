# free-public-api
 
List of free simple APIs (* api key is required)

1. [Get age by birthdate](https://free-public-api.herokuapp.com/age/?value=1986-06-02)
1. [Days left by date](https://free-public-api.herokuapp.com/days_left/?value=2020-12-31)
1. [Get your IP](https://free-public-api.herokuapp.com/ip/)
1. [Get your user agent](https://free-public-api.herokuapp.com/user_agent/)
1. [Get your country code](https://free-public-api.herokuapp.com/country/)
1. [Get latitude and longitude by address using Google Maps *](https://free-public-api.herokuapp.com/geocode/?value=calle%20d%27ulla%2017%2C%20torroella%20de%20montgri&key=)
1. [Get address by coordinates using Google Maps *](https://free-public-api.herokuapp.com/geocode_reverse/?value=42.0412139,3.1251759&key=)
1. [Get local time by time zone](https://free-public-api.herokuapp.com/local_time/?value=Europe/Madrid)
1. [Get country code by international phone](https://free-public-api.herokuapp.com/country_phone_prefix_reverse/?value=49%2089%20123%20456%20789)
1. [Get year percentage](https://free-public-api.herokuapp.com/year_percentage/)
1. [Validate VIES](https://free-public-api.herokuapp.com/validate_vies/?value=LU20260743)
1. [Validate DNI](https://free-public-api.herokuapp.com/validate_dni/?value=65839957L)
1. [Validate CIF](https://free-public-api.herokuapp.com/validate_cif/?value=A62134341)
1. [Validate IBAN](https://free-public-api.herokuapp.com/validate_iban/?value=ES6621000418401234567891)
1. [Validate email](https://free-public-api.herokuapp.com/validate_email/?value=account@domain.com)
1. [Validate phone](https://free-public-api.herokuapp.com/validate_phone/?value=49%2089%20123%20456%20789)
1. [Convert text to audio (mp3) using IBM Watson](https://free-public-api.herokuapp.com/speech/?value=hola&voice=es-ES_EnriqueVoice)
1. [Generate number](https://free-public-api.herokuapp.com/generate_number/?value=50-100)
1. [Generate hex color](https://free-public-api.herokuapp.com/generate_color/)
1. [Generate password](https://free-public-api.herokuapp.com/generate_password/?length=8)
1. [Generate avatar](https://free-public-api.herokuapp.com/generate_avatar/)
1. [Generate name](https://free-public-api.herokuapp.com/generate_name/?value=female)
1. [Generate QR](https://free-public-api.herokuapp.com/generate_qr/?value=https://github.com/&size=200)
1. [Encode string to MD5](https://free-public-api.herokuapp.com/encode_md5/?value=string)
1. [Encode string to Base64](https://free-public-api.herokuapp.com/encode_base64/?value=string)
1. [Decode Base64 to string](https://free-public-api.herokuapp.com/decode_base64/?value=c3RyaW5n)
1. [Search photo from pixabay *](https://free-public-api.herokuapp.com/search_photo/?value=dog&key=)
1. [Search video from pixabay *](https://free-public-api.herokuapp.com/search_video/?value=london&key=)
1. [SEO search volume from keyword surfer](https://free-public-api.herokuapp.com/seo_search_volume/?value=vestidos+de+novia&country=es)
1. [SEO keyword CPC from keyword surfer](https://free-public-api.herokuapp.com/seo_keyword_cpc/?value=vestidos+de+novia&country=es)
1. [Get Pagespeed score *](https://free-public-api.herokuapp.com/pagespeed_score/?value=https://github.com/&device=mobile&key=)
1. [Web screenshot from Pagespeed *](https://free-public-api.herokuapp.com/screenshot/?value=https://github.com/&device=mobile&key=)
1. [Get final redirection](https://free-public-api.herokuapp.com/final_redirect/?value=https://t.co/PAzsIQVNhg)
1. [Detect genre by name](https://free-public-api.herokuapp.com/genre_name/?value=silvia)
1. [Validate credit card](https://free-public-api.herokuapp.com/validate_credit_card/?value=4242424242424242)
1. [Get credit card type](https://free-public-api.herokuapp.com/credit_card_type/?value=4242424242424242)
1. [Get International phone prefix](https://free-public-api.herokuapp.com/country_phone_prefix/?value=ES)
1. [Get product title by EAN code](https://free-public-api.herokuapp.com/product_title_ean/?value=5030917291098&country=ES)
1. [Currency conversor](https://free-public-api.herokuapp.com/currency_conversor/?value=10&from=EUR&to=USD)
1. [Get synonymous](https://free-public-api.herokuapp.com/synonymous/?value=avi%C3%B3n&lang=es)

**Support this project**

- [Paypal](https://paypal.me/miquelcamps)

**GET Parameters**

- format [json|text], default text
- value, default null
- callback, default null
- key (if is required, /geocode/ requires a google maps api key)
- default, default value false

**Response**

JSON format

[https://free-public-api.herokuapp.com/age/?value=1986-06-02&format=json](https://free-public-api.herokuapp.com/age/?value=1986-06-02&format=json)

```
{"result":34}
```

Javascript callback

https://free-public-api.herokuapp.com/age/?value=1986-06-02&callback=printAge

```
printAge(34)
```

**Using an API on Google Spreadsheets**
```
=IMPORTDATA("https://free-public-api.herokuapp.com/age/?value=1986-06-02")
```
