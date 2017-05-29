# normalize-zip-code

A service to normalize a zip-code:

```php
namespace Jstewmc\NormalizeZipCode;

// instantiate the service
$service = new NormalizeZipCode();

// normalize zip codes
$service('12345')        // returns "12345"
$service('12345-6789');  // returns "12345"
$service('foo');         // throws InvalidArgumentException
```

This library will normalize a zip-code to its five-digit equivalent. 

## Author

[Jack Clayton](mailto:clayjs0@gmail.com)

## Version 

### 0.1.0, May 29, 2017

* Initial release

## License

[MIT](https://github.com/jstewmc/normalize-zip-code/blob/master/LICENSE)
