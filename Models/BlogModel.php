<?php

use Core\Model;

class BlogModel extends Model
{
    public function getBlogs()
    {
        $blogs = [
            ["title" => "lorem ipsum", "description" => "Omnis veritatis veritatis natus autem aperiam corporis iure. Tenetur nulla suscipit dolor quos eos qui inventore aliquam. Praesentium dolorem et eum animi voluptates alias. A dolor molestias commodi quasi possimus reiciendis esse. Voluptatibus quod aut velit magnam dolor nostrum est eaque."],
            
            ["title" => "lorem ipsum", "description" => "Deleniti est quo suscipit quidem eligendi. Autem voluptates nisi eaque ab sunt atque. Adipisci molestias qui recusandae dignissimos minus rerum dolores magnam. Sapiente explicabo nostrum numquam iusto nobis beatae consectetur. Voluptas neque ipsum autem eos impedit harum. Aliquid ab ab reprehenderit."],
            
            ["title" => "lorem ipsum", "description" => "Voluptas ut inventore saepe odio reiciendis eum ducimus. Ut quos occaecati qui. Sit autem eos et aut perferendis. Inventore repellat aut quibusdam enim commodi corrupti libero repellendus. Distinctio dolorum ullam et et. Incidunt blanditiis aut enim qui qui esse."],
            
            ["title" => "lorem ipsum", "description" => "Illo exercitationem est rerum voluptates. Ratione voluptatem natus sit quasi velit. Amet consequatur error sit eos. Qui cupiditate aut ut natus. Voluptas in omnis minus odio veritatis."],

            ["title" => "lorem ipsum", "description" => "Provident ex neque voluptas soluta expedita quia excepturi. Veniam perferendis qui quia hic. Voluptatum corrupti sit nostrum voluptatum minus earum sapiente voluptas. Enim modi laudantium est maiores. Accusantium ut vel ad adipisci quia vel. Sit ut quidem aut suscipit qui dolore."],
        ];
        
        return json_encode($blogs);
    }
}
