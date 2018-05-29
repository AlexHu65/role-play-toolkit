<section class="container container-fluid" id="monsters">
    <div id="controls" class="col-md-12">
        <div class="panel panel-default">
            <div style="" class="panel-body">
                <button class="btn btn-success" id="new-monster">New monster</button>
                <button class="btn btn-success" id="new-hero">New Hero</button>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="panel panel-default">
            <div id="monsters-panel" data-value="0" style="display: ;" class="panel-body">
                <form method="post" id="monster-form" autocomplete="off">

                    <div class="form-group">
                        <label for="picture">Picture</label>
                        <input value="" type="file"
                               class="form-" name="picture" id="picture"/>
                    </div>
                    <div class="form-group">
                        <input readonly value="monster" type="text"
                               class="form-control" name="type" id="type"
                               placeholder="Monster"/>
                    </div>
                    <div class="form-group">
                        <input value="" type="text"
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
                        <input value="1" readonly type="text"
                               class="form-control" name="level" id="level"
                               placeholder="Level"/>
                    </div>
                    <div class="form-group">
                        <label for="abilities">Abilities</label>
                        <ul id="abilities-list">
                            <?php if (isset($abilities)) {
                                for ($i = 0; $i < count($abilities); $i++) { ?>
                                    <li id="ability-<?php echo strtolower(str_replace(" ", "", $abilities[$i]['name'])) ?>"
                                        data-value="1"><input
                                                name="ability-<?php echo $abilities[$i]['id'];?>"
                                                value="<?php echo $abilities[$i]['name']; ?>"
                                                id="ability-<?php echo $abilities[$i]['id']; ?>"
                                                type="checkbox">
                                        <?php echo $abilities[$i]['name']; ?>
                                    </li>
                                    <?php
                                }
                            } ?>

                        </ul>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success">Save</button>
                    </div>

                </form>
            </div>
            <div id="hero-panel" data-value="0" style="display: none;" class="panel-body">
                Here the hero
            </div>
        </div>
    </div>
</section>