# laravel-inputs

Currently the collection consists of the folowing:

* Checkbox
* Input
* Select
* Textarea

## Usage

### Textarea

```php
@include('location-to-partial.textarea', ['field_name' => 'description', 'model' => $item])
```

### Select

```php
@include('location-to-partial.select', [
                        'field_name' => 'gender',
                        'option_list' => $gender,
                        'selected_option' => old('gender') ?: $selectedGender
                    ])

@include('location-to-partial.select', [
                    'field_name' => 'animal',
                    'option_list' => $animals,
                    'selected_option' => $selectedAnimal,
                    'data_attribute' => 'extra-info',
                    'data_value' => 'extra_info'
                ])
```

### Input

```php
@include('location-to-partial.input', ['input_type' => 'text', 'field_name' => 'last_name', 'model' => $item])
@include('location-to-partial.input', ['input_type' => 'email', 'field_name' => 'email', 'model' => $item])
@include('location-to-partial.input', ['input_type' => 'file', 'field_name' => 'document', 'accept' => 'application/pdf,image/gif'])
```

### Checkbox

```php
@include('location-to-partial.checkbox', ['field_name' => 'remember_me', 'checked' => $item['remember_me'], 'model' => $item])
```
