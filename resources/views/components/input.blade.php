<input {{$attributes->class([
    'form-control', // это передается название класса
])->merge([
    'type' => 'text', // передается атрибут и значение по умолчанию. 
])}}>