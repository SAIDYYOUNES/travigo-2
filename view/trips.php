<?php

require_once '../controller/trips.controller.php';



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../sass_indix/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>Document</title>
</head>
<body>

<?php require_once './navbar.php'; ?>
<main>
<div class="titre1">
<a class="but-start" href="./addtrip.php">Add trip</a>
</div>

<?php
    $comt = 0;
    foreach ($new_trips as $new_trip) : ?>

        <div class="container col-lg-6 col-sm-12 this_trip">
            <div class="col-lg-12 col-sm-12">
                <div class="pic_user">
                    <div class="pic_user_in">
                        <div class="pic"><img src="../img/téléchargement.png" alt=""></div>
                        <div class="user"> <label> <?php echo $new_trip["createur"] ?></label></div>
                    </div>
                    
                        <div class="crud">
                            <button>
                                <div class="dropdown">
                                    <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="../images/menu.png" alt="">
                                    </a>

                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">



                                        <!-- form delete  -->
                                        <form method="POST" onsubmit="return confirm('Are you sure ? You will not be able to go back !');">
                                            <?php $id = $new_trip['id'] ?>
                                            <li><input class="updelet" type="button" class="<?php echo 'editmodal' . $comt ?>" data-bs-toggle="modal" data-bs-target="<?php echo '#staticBackdrops_update' . $comt ?>" value="Update"></li>
                                            <li> <input type="hidden" name="id" value="<?php echo $new_trip['id'] ?>"> </li>
                                            <li><input class="updelet" type="submit" class="dropdown-item" name="delete" value="Delete"> </li>
                                        </form>

                                    </ul>
                                </div>
                            </button>

                        </div>
                    <?php endif; ?>

                </div>
            </div>
            <script>
                $(document).ready(function() {
                    $(<?php echo '.editmodal' . $comt ?>).on('click', function() {
                        $(<?php echo '#staticBackdrops_update' . $comt ?>).modal('show');
                    })
                })
            </script>

            <form method="POST">
                <div class="modal fade" id="<?php echo 'staticBackdrops_update' . $comt ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Update </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body inputss">
                                <div class="">
                                    <input type="text" name="title" placeholder="Title" value="<?php echo $new_trip['title'] ?>" required>
                                </div>
                            </div>

                            <div class="modal-body" inputss>
                                <div>
                                    <input type="text" name="description" placeholder="Description" value="<?php echo $new_trip['description'] ?>" required>
                                </div>
                            </div>
                            <div class="modal-body" inputss>
                                <label> update category</label>
                                <select name="category" id="">
                                    <option value="fantasy">Fantasy</option>
                                    <option value="Action">Action</option>
                                    <option value="horror">horror</option>
                                    <option value="Drama">Drama</option>
                                    <option value="Romance">Romance</option>
                                </select>
                            </div>
                            <div class="modal-body" inputss>
                                <div>
                                    <input type="file" name="photo" value="<?php echo '../images/' . $new_trip['photo'] ?>" accept="image/png, image/jpeg">
                                </div>
                            </div>

                            <li> <input type="text" name="id" value="<?php echo 'ADA' ?>"> </li>
                            <li> <input type="text" name="id" value="<?php echo $new_trip['id'] ?>"> </li>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button class="btn btn-primary" type="submit" name="update_trip">Enregistre</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="title">
                <label> <?php echo $new_trip['title'] ?> </label>
            </div>
            <div class="description"> <?php echo $new_trip['descriptione'] ?></div>
            <div class="trip_pic">
                <img src=" <?php echo '../images/' . $new_trip['photo'] ?>" alt="">
            </div>


            <!-- comment -->
            <form method="POST">
                <div class="post_comnt">
                    <input type="text" name="comment" placeholder="Comment">
                    <li> <input type="hidden" name="id" value="<?php echo $new_trip['id'] ?>"> </li>
                    <button class="cmnt_btn" type="submit" name="commenter"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-send btn_send" viewBox="0 0 16 16">
                            <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z" />
                        </svg></button>
                </div>
            </form>







           


        </div>

    <?php $comt++;
endforeach; ?>








</main>
    
</body>
</html>
