  <section class="container container-fluid" id="monsters">

    <div class="col-md-12">


      <div class="panel panel-default">
    <div class="panel-body">
      <ul id="monsters-list">


      <?php if (isset($monsters)) {
        //print_r($monsters);
        //show all monsters
        for ($i=0; $i < count($monsters) ; $i++) {
          ?>
              <div class="panel panel-default">
              <div class="panel-body">
                <a href="<?php echo base_url().'monsters/'.$monsters[$i]['id'] ?>">Modify</a>
                <a href="<?php echo base_url().'monsters/delete/'.$monsters[$i]['id'] ?>">Delete</a>
                <li id="item<?php echo $i?>"><?php echo $monsters[$i]['picture']?></li>
                <li id="item<?php echo $i?>"><?php echo $monsters[$i]['name']?></li>
                <li id="item<?php echo $i?>"><?php echo $monsters[$i]['level']?></li>
                <li id="item<?php echo $i?>"><?php echo $monsters[$i]['race']?></li>

              </div>
              </div>

      <?php  }

      } ?>

      <?php if (isset($monster)) { ?>

        <div class="panel panel-default">
        <div class="panel-body">
        <li id="item"><?php echo $monster['picture']?></li>
        <li id="item"><?php echo $monster['name']?></li>
        <li id="item"><?php echo $monster['level']?></li>
        <li id="item"><?php echo $monster['race']?></li>
      </div>
      </div>

    <?php  } ?>
      </ul>
    </div>
  </div>
    </div>

  </section>
