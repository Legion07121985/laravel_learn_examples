-- phpMyAdmin SQL Dump
-- version 4.9.7deb1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Час створення: Бер 12 2021 р., 15:33
-- Версія сервера: 8.0.23-0ubuntu0.20.10.1
-- Версія PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `test`
--

-- --------------------------------------------------------

--
-- Структура таблиці `tables_with_code`
--

CREATE TABLE `tables_with_code` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `col1_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `col1_data` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `col2_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `col2_data` text CHARACTER SET utf8 COLLATE utf8_bin,
  `col3_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `col3_data` text CHARACTER SET utf8 COLLATE utf8_bin,
  `col4_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `col4_data` text CHARACTER SET utf8 COLLATE utf8_bin,
  `description` text CHARACTER SET utf8 COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='includes name files and data this files which show in html-tables';

--
-- Дамп даних таблиці `tables_with_code`
--

INSERT INTO `tables_with_code` (`id`, `name`, `col1_name`, `col1_data`, `col2_name`, `col2_data`, `col3_name`, `col3_data`, `col4_name`, `col4_data`, `description`) VALUES
(1, 'Passing Data To Components', 'app/View/Components/Alert.php', '<?php\r\nnamespace AppViewComponents;\r\nuse IlluminateViewComponent;\r\nclass Alert extends Component\r\n{\r\n   public $type;\r\n   public $message;\r\n   public function __construct($type, $message)\r\n   {\r\n      $this->type = $type;\r\n      $this->message = $message;\r\n   }\r\n   public function render ()\r\n   {\r\n      return view(\'components.alert\');\r\n   }\r\n}', '	resources/views/components/alert.blade.php', '<div class=\"alert alert-error\">\r\n   message for welcome.blade.php\r\n</div>', 'resources/views/welcome.blade.php', '<x-alert type=\"error\" message=\"message for welcome.blade.php\"/>', 'Out html for brouser', '<div class=\"alert alert-error\">\r\n   message for welcome.blade.php\r\n</div>', 'The Basics ->\r\n<a href=\"https://laravel.com/docs/8.x/blade\">Blade Templates</a> ->\r\n<a href=\"https://laravel.com/docs/8.x/blade#passing-data-to-components\">Passing Data To Components</a>'),
(2, 'Component Methods', 'app/View/Components/Option.php', '<?php\r\nnamespace AppViewComponents;\r\nuse IlluminateViewComponent;\r\nclass Option extends Component\r\n{\r\n   label = $label;\r\n   $this->value = $value;\r\n   public function isSelected($option)\r\n   {\r\n      return $option;\r\n   }\r\n   public function render()\r\n   {\r\n      return view(\'components.option\');\r\n   }\r\n}', 'resources/views/components/option.blade.php', '<option {{ $isSelected($value) ? \'selected=\"selected\"\' : \'\' }} value=\"{{ $value }}\">\r\n   {{ $label }}\r\n</option>', 'resources/views/welcome.blade.php', '<select size=\"3\" name=\"hero\">\r\n   <x-option value=\"0\" label=\"Papay\"></x-option>\r\n   <x-option value=\"1\" label=\"Tom\"></x-option>\r\n   <x-option value=\"0\" label=\"Jerry\"></x-option>\r\n</select>', 'Out html for brouser', '<select size=\"3\" name=\"hero\">\r\n   <option value=\"0\">Papay</option>\r\n   <option selected=\"\"selected\"\" value=\"1\">Tom</option>\r\n   <option value=\"0\">Jerry</option>\r\n</select>', 'The Basics ->\r\n<a href=\"https://laravel.com/docs/8.x/blade\">Blade Templates</a> ->\r\n<a href=\"https://laravel.com/docs/8.x/blade#component-methods\">Component Methods</a>'),
(3, 'Accessing Attributes & Slots Within Component Classes', 'app/View/Components/Commons/Link.php', '<?php\r\nnamespace AppViewComponentsCommons;\r\nuse IlluminateViewComponent;\r\nuse IlluminateSupportHtmlString;\r\nclass Link extends Component\r\n{\r\n   public $path = \"\";\r\n   public function __construct()\r\n   {\r\n      $this->path = request()->path();\r\n   }   \r\n   public function render()\r\n   {\r\n      return function (array $data) {\r\n         if(isset($data[\'attributes\'][\'href\'])) {\r\n            $data[\'attributes\'][\"link\"] = $data[\'attributes\'][\'href\'];\r\n            if ($data[\'attributes\'][\'href\'] == \"/\") {\r\n               $data[\'attributes\'][\'active\'] = $data[\'attributes\'][\'class\'].\" link-active-class\";\r\n            } else {\r\n               $data[\'attributes\'][\'active\'] = $data[\'attributes\'][\'class\'];\r\n            }   \r\n         }   \r\n         return \'components.commons.link\';\r\n      };  \r\n   }   \r\n} ', 'resources/views/components/commons/link.blade.php', '<a href=\"{{ $attributes[\'link\'] }}\" class=\"{{ $attributes[\'active\'] }}\">\r\n   {{ $slot }}\r\n</a>', 'resources/views/welcome.blade.php', '<x-commons.link href=\"/\" class=\"primary-action\">\r\n   <i class=\"fas fa-newspaper\"></i> News\r\n</x-commons.link>', 'Out html for brouser', '<a href=\"/\" class=\"primary-action link-active-class\">\r\n   <i class=\"fas fa-newspaper\"></i> News\r\n</a>', 'The Basics ->\r\n<a href=\"https://laravel.com/docs/8.x/blade\">Blade Templates</a> ->\r\n<a href=\"https://laravel.com/docs/8.x/blade#using-attributes-slots-within-component-class\">Accessing Attributes & Slots Within Component Classes</a>'),
(4, 'Environment Directives', 'resources/views/layauts/content.blade.php', '@production\r\n    <div class=\"container\">\r\n        This is production mode??? Yes it is!\r\n    </div>\r\n    @endproduction\r\n \r\n    @env(\'local\')\r\n        @isset($_ENV[\'EXAMPLE\'])\r\n            <div>\r\n                Environment \'APP_ENV\' is set in \'local\'!\r\n            </div>\r\n        @endisset\r\n    @endenv', 'Out html for brouser', '<div>\r\n    Environment \'APP_ENV\' is set in \'local\'!\r\n</div>', NULL, NULL, NULL, NULL, 'The Basics ->\r\n<a href=\"https://laravel.com/docs/8.x/blade\">Blade Templates</a> ->\r\n<a href=\"https://laravel.com/docs/8.x/blade#environment-directives\">Environment Directives</a>'),
(5, 'Component Attributes', 'app/View/Components/Alert2.php', '<?php\r\n\r\nnamespace App\\View\\Components;\r\n\r\nuse Illuminate\\View\\Component;\r\n\r\nclass Alert2 extends Component\r\n{\r\n    public $type;\r\n    public $message;\r\n    public function __construct($message, $type)\r\n    {\r\n	    $this->message = $message;\r\n	    $this->type = $type;\r\n    }\r\n    public function render()\r\n    {\r\n        if (env(\'APP_NAME\')){\r\n            echo env(\'APP_NAME\');\r\n        }\r\n        return view(\'components.alert2\');\r\n    }\r\n}\r\n', 'resources/views/components/alert2.blade.php', '<h2>Component Attributes</h2>\r\n<div type= {{ $type }} {{ $attributes }}>\r\n	{{ $message }}\r\n</div>', 'resources/views/layauts/content.blade.php', '<x-alert2 type=\"someType\" message=\"Massage from welcome.blade.php\" class=\"mt-4\">\r\n            <string>Whoops! </string>Something went wrong!\r\n    </x-alert2>', 'Out html for brouser', '<div type=\"someType\" class=\"mt-4\">\r\n	Massage from welcome.blade.php\r\n</div>', 'The Basics ->\r\n<a href=\"https://laravel.com/docs/8.x/blade\">Blade Templates</a> ->\r\n<a href=\"https://laravel.com/docs/8.x/blade#component-attributes\">Component Attributes</a>'),
(6, 'Component Attributes', 'app/View/Components/Alert2.php', '<?php\r\n\r\nnamespace App\\View\\Components;\r\n\r\nuse Illuminate\\View\\Component;\r\n\r\nclass Alert2 extends Component\r\n{\r\n    public $type;\r\n    public $message;\r\n    public function __construct($message, $type)\r\n    {\r\n	    $this->message = $message;\r\n	    $this->type = $type;\r\n    }\r\n    public function render()\r\n    {\r\n        if (env(\'APP_NAME\')){\r\n            echo env(\'APP_NAME\');\r\n        }\r\n        return view(\'components.alert2\');\r\n    }\r\n}\r\n', 'resources/views/components/alert2.blade.php', '<h2>Default / Merged Attributes</h2>\r\n<div {{ $attributes->merge([\'class\'=>\'alert alert-\'.$type]) }}>\r\n	{{ $message }}\r\n</div>', 'resources/views/layauts/content.blade.php', '<x-alert2 type=\"someType\" message=\"Massage from welcome.blade.php\" class=\"mt-4\">\r\n            <string>Whoops! </string>Something went wrong!\r\n    </x-alert2>', 'Out html for brouser', '<div class=\"alert alert-someType mt-4\">\r\n	Massage from welcome.blade.php\r\n</div>', 'The Basics ->\r\n<a href=\"https://laravel.com/docs/8.x/blade\">Blade Templates</a> ->\r\n<a href=\"https://laravel.com/docs/8.x/blade#default-merged-attributes\">Default / Merged Attributes</a>'),
(7, 'Component Attributes', 'app/View/Components/Alert2.php', '<?php\r\n\r\nnamespace App\\View\\Components;\r\n\r\nuse Illuminate\\View\\Component;\r\n\r\nclass Alert2 extends Component\r\n{\r\n    public $type;\r\n    public $message;\r\n    public function __construct($message, $type)\r\n    {\r\n	    $this->message = $message;\r\n	    $this->type = $type;\r\n    }\r\n    public function render()\r\n    {\r\n        if (env(\'APP_NAME\')){\r\n            echo env(\'APP_NAME\');\r\n        }\r\n        return view(\'components.alert2\');\r\n    }\r\n}\r\n', 'resources/views/components/alert2.blade.php', '<div class=\"alert alert-danger\">\r\n	{{ $slot }}\r\n</div>', 'resources/views/layauts/content.blade.php', '<x-alert2 type=\"someType\" message=\"Massage from welcome.blade.php\" class=\"mt-4\">\r\n            <string>Whoops! </string>Something went wrong!\r\n    </x-alert2>', 'Out html for brouser', '<div class=\"alert alert-danger\">\r\n	<string>Whoops! </string>Something went wrong!\r\n</div>', 'The Basics ->\r\n<a href=\"https://laravel.com/docs/8.x/blade\">Blade Templates</a> ->\r\n<a href=\"https://laravel.com/docs/8.x/blade#slots\">Slots</a>');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `tables_with_code`
--
ALTER TABLE `tables_with_code`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `tables_with_code`
--
ALTER TABLE `tables_with_code`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
