<section class="container container-fluid" id="monsters">
    <div id="controls" class="col-md-12">
        <div class="panel panel-default">
            <div style="" class="panel-body">
                <a href="<?php echo base_url(); ?>newitem/" class="btn btn-success" id="new-monster">New monster</a>
            </div>
        </div>
    </div>
    <div class="col-md-12">

        <div class="panel panel-default">
            <div class="panel-body">
                <ul id="monsters-list">

                    <?php if (isset($monsters)) {
                        for ($i = 0; $i < count($monsters); $i++) {
                            ?>
                            <div class="panel panel-default">
                                <div class="panel-body">

                                    <li id="item<?php echo $i ?>">
                                        <div id="monsters-thumbnail-container" class="col-md-12 pull-left">
                                            <a id="monsters-thumbnail"
                                               href="<?php echo base_url() . 'monsters/' . $monsters[$i]['id'] ?>"
                                               class="thumbnail">
                                                <img src="img/monsters/<?php echo $monsters[$i]['picture'] ?>"
                                                     alt="monster-thumbnail">
                                            </a>
                                        </div>
                                    </li>

                                    <li id="item<?php echo $i ?>"><b>Name:</b><?php echo $monsters[$i]['name'] ?></li>
                                    <li id="item<?php echo $i ?>"><b>Level:</b><?php echo $monsters[$i]['level'] ?></li>
                                    <li id="item<?php echo $i ?>"><b>Race:</b><?php echo $monsters[$i]['race'] ?></li>
                                    <li>
                                        <a class="btn btn-success"
                                           href="<?php echo base_url() . 'monsters/' . $monsters[$i]['id'] ?>">Details</a>
                                    </li>


                                </div>
                            </div>

                        <?php }
                    } ?>
                    <?php if (isset($monster)) { ?>
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div id="form-content">
                                    <form method="post" id="monster-form-update" autocomplete="off">
                                        <div class="form-group">
                                            <div style="margin-bottom: 5%;" id="monsters-thumbnail-container"
                                                 class="col-md-12">
                                                <a id="monsters-thumbnail" href="#"
                                                   class="thumbnail">
                                                    <img src="img/monsters/<?php echo $monster['picture'] ?>"
                                                         alt="monster-thumbnail">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input readonly value="<?php echo $monster['id'] ?>" type="text"
                                                   class="form-control" name="id" id="id"
                                                   placeholder=""/>
                                        </div>
                                        <div class="form-group">
                                            <input value="<?php echo $monster['name'] ?>" type="text"
                                                   class="form-control" name="name" id="name"
                                                   placeholder="Monster Name"/>
                                        </div>

                                        <div class="form-group">
                                            <select class="form-control" name="race" id="race-monster">
                                                <?php
                                                if (isset($race)) {
                                                    for ($i = 0; $i < count($race); $i++) { ?>
                                                        <option value="<?php echo $race[$i]['id'] ?>"><?php echo $race[$i]['name'] ?></option>
                                                    <?php }
                                                }
                                                ?>
                                            </select>

                                        </div>
                                        <div class="form-group">
                                            <input value="<?php echo $monster['level'] ?>" readonly type="text"
                                                   class="form-control" name="level" id="level"
                                                   placeholder="Level"/>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success">Save</button>
                                            <a class="btn btn-danger" id="delete"
                                               data-value="<?php echo $monster['id']; ?>"
                                               href="#">Delete
                                            </a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>
