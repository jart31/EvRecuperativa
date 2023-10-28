<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            // Productos de Café
            ['name' => 'Espresso', 'image' => 'img/espresso.jpg', 'description' => 'Café intenso y concentrado.', 'price' => 1500, 'category' => 'café'],
            ['name' => 'Latte', 'image' => 'img/latte.jpg', 'description' => 'Café con leche cremosa.', 'price' => 2000, 'category' => 'café'],
            ['name' => 'Cappuccino', 'image' => 'img/cappuccino.jpg', 'description' => 'Café con espuma de leche.', 'price' => 2200, 'category' => 'café'],
            ['name' => 'Americano', 'image' => 'img/americano.jpg', 'description' => 'Café diluido con agua.', 'price' => 1800, 'category' => 'café'],
            ['name' => 'Mocha', 'image' => 'img/mocha.jpg', 'description' => 'Café con chocolate y crema.', 'price' => 2400, 'category' => 'café'],
            ['name' => 'Macchiato', 'image' => 'img/macchiato.jpg', 'description' => 'Café con una pequeña cantidad de leche.', 'price' => 2100, 'category' => 'café'],
            ['name' => 'Flat White', 'image' => 'img/flatwhite.jpg', 'description' => 'Café con leche microespumada.', 'price' => 2300, 'category' => 'café'],
            ['name' => 'Cortado', 'image' => 'img/cortado.jpg', 'description' => 'Espresso cortado con un poco de leche caliente.', 'price' => 1700, 'category' => 'café'],
            ['name' => 'Ristretto', 'image' => 'img/ristretto.jpg', 'description' => 'Espresso corto y concentrado.', 'price' => 1600, 'category' => 'café'],
       

            // Productos de Pastelería
            ['name' => 'Tarta de Manzana', 'image' => 'img/tartamanzana.jpg', 'description' => 'Deliciosa tarta rellena de manzana.', 'price' => 2500, 'category' => 'pastelería'],
            ['name' => 'Brownie de Chocolate', 'image' => 'img/browniechocolate.jpg', 'description' => 'Brownie denso y chocolatoso.', 'price' => 2300, 'category' => 'pastelería'],
            ['name' => 'Cheesecake', 'image' => 'img/cheesecake.jpg', 'description' => 'Tarta cremosa de queso.', 'price' => 2800, 'category' => 'pastelería'],
            ['name' => 'Muffin de Arándanos', 'image' => 'img/muffinarandanos.jpg', 'description' => 'Muffin esponjoso con arándanos.', 'price' => 2100, 'category' => 'pastelería'],
            ['name' => 'Tiramisú', 'image' => 'img/tiramisu.jpg', 'description' => 'Postre italiano a base de café y queso mascarpone.', 'price' => 2900, 'category' => 'pastelería'],
            ['name' => 'Eclair de Chocolate', 'image' => 'img/eclairchocolate.jpg', 'description' => 'Pastelito relleno de crema y cubierto de chocolate.', 'price' => 2200, 'category' => 'pastelería'],
            ['name' => 'Cannoli', 'image' => 'img/cannoli.jpg', 'description' => 'Postre siciliano relleno de queso ricotta.', 'price' => 2600, 'category' => 'pastelería'],
            ['name' => 'Milhojas', 'image' => 'img/milhojas.jpg', 'description' => 'Delicado pastel de capas de hojaldre y crema.', 'price' => 2700, 'category' => 'pastelería'],
            ['name' => 'Brioche', 'image' => 'img/brioche.jpg', 'description' => 'Pan dulce suave y esponjoso.', 'price' => 2400, 'category' => 'pastelería'],
        

            // Productos de Sándwich
            ['name' => 'Sándwich de Pollo', 'image' => 'img/sandwichpollo.jpg', 'description' => 'Pollo asado, lechuga, tomate y mayonesa.', 'price' => 3500, 'category' => 'sándwich'],
            ['name' => 'Sándwich Vegano', 'image' => 'img/sandwichvegano.jpg', 'description' => 'Vegetales frescos, hummus y aguacate.', 'price' => 3300, 'category' => 'sándwich'],
            ['name' => 'Sándwich de Atún', 'image' => 'img/sandwichatun.jpg', 'description' => 'Atún, mayonesa, cebolla y apio.', 'price' => 3400, 'category' => 'sándwich'],
            ['name' => 'Sándwich de Jamón y Queso', 'image' => 'img/sandwichjamonqueso.jpg', 'description' => 'Jamón, queso, lechuga y tomate.', 'price' => 3200, 'category' => 'sándwich'],
            ['name' => 'Sándwich Club', 'image' => 'img/sandwichclub.jpg', 'description' => 'Pollo, bacon, huevo, lechuga y tomate.', 'price' => 3700, 'category' => 'sándwich'],
            ['name' => 'Sándwich de Pavo', 'image' => 'img/sandwichpavo.jpg', 'description' => 'Pavo, queso crema, cranberry y lechuga.', 'price' => 3600, 'category' => 'sándwich'],
            ['name' => 'Sándwich de Roast Beef', 'image' => 'img/sandwichroastbeef.jpg', 'description' => 'Roast beef, cebolla caramelizada y mostaza.', 'price' => 3800, 'category' => 'sándwich'],
            ['name' => 'Sándwich Caprese', 'image' => 'img/sandwichcaprese.jpg', 'description' => 'Tomate, mozzarella y albahaca.', 'price' => 3400, 'category' => 'sándwich'],
            ['name' => 'Sándwich de Huevo', 'image' => 'img/sandwichegg.jpg', 'description' => 'Huevo revuelto, jamón y queso.', 'price' => 3100, 'category' => 'sándwich']
       
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
