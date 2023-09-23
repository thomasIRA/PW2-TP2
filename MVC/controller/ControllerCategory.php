<?php
RequirePage::model("Category");

class ControllerCategory implements Controller {

    public function index() {
        $category = new Category;
        $data["categories"] = $category->read();
        
        Twig::render("category-index.php", $data);
    }

    public function create() {
        if(!SESSION_USER || SESSION_USER["username"] != "root") {
            RequirePage::redirect("error");
            exit();
        }
        else Twig::render("category-create.php");
    }

    public function store() {
        $category = new Category;
        $url = $_SERVER["HTTP_REFERER"];
        $categoryId = $category->create($_POST);
        header("location: $url");
    }
}