<?php
    include_once("templates/header.php");

    if(isset($_GET['id'])) {

        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post) {
            if($post['id'] == $postId) {
                $currentPost = $post;
            }
        }
    }

?>
    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title'] ?></h1>
            <p id="post-description"><?= $currentPost['title'] ?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
            </div>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, qui excepturi quo corporis maiores aut iusto minima explicabo deserunt culpa sapiente incidunt, laboriosam neque aliquam unde molestiae vero officiis quos.
            Provident quia rem illum laboriosam aliquid alias fugit eligendi iusto doloremque ea magnam iste commodi nostrum qui odio quibusdam maxime rerum placeat, eum minus totam quae consequatur explicabo dolor. Adipisci.
            Quaerat voluptas fugit dolorum aliquid impedit ipsa, temporibus numquam exercitationem possimus molestiae, magnam ex aut, facilis totam quisquam odio? Repudiandae, tenetur quibusdam eligendi sed expedita est saepe incidunt suscipit magni!
            Repudiandae explicabo incidunt voluptatem, tenetur veritatis modi aliquam, itaque dolores quos expedita assumenda rem! Necessitatibus, ab voluptatum! Ducimus aspernatur ullam at veritatis sequi recusandae, velit ab asperiores atque placeat cupiditate!
            Eligendi ducimus ab ex tenetur repellat! Qui, vero sint illum totam quos recusandae magnam at officia architecto veniam asperiores modi iure ipsa ratione autem! Deserunt repellat possimus excepturi a animi!</p>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, qui excepturi quo corporis maiores aut iusto minima explicabo deserunt culpa sapiente incidunt, laboriosam neque aliquam unde molestiae vero officiis quos.
            Provident quia rem illum laboriosam aliquid alias fugit eligendi iusto doloremque ea magnam iste commodi nostrum qui odio quibusdam maxime rerum placeat, eum minus totam quae consequatur explicabo dolor. Adipisci.
            Quaerat voluptas fugit dolorum aliquid impedit ipsa, temporibus numquam exercitationem possimus molestiae, magnam ex aut, facilis totam quisquam odio? Repudiandae, tenetur quibusdam eligendi sed expedita est saepe incidunt suscipit magni!
            Repudiandae explicabo incidunt voluptatem, tenetur veritatis modi aliquam, itaque dolores quos expedita assumenda rem! Necessitatibus, ab voluptatum! Ducimus aspernatur ullam at veritatis sequi recusandae, velit ab asperiores atque placeat cupiditate!
            Eligendi ducimus ab ex tenetur repellat! Qui, vero sint illum totam quos recusandae magnam at officia architecto veniam asperiores modi iure ipsa ratione autem! Deserunt repellat possimus excepturi a animi!</p>
        </div>
        </div>
        <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach($currentPost['tags'] as $tag): ?>
                <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach($categories as $category): ?>
                <li><a href="#"><?= $category ?></a></li>
            <?php endforeach; ?>
        </ul>
    </aside>
    </main>
<?php
    include_once("templates/footer.php");
?>