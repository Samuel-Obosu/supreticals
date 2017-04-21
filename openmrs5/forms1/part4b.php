<?php
  if(!isset($_SESSION['recPid'])){
    header('location:index.php?q=1');
  }
  $_SESSION['q']=$_GET['q'];

  $sql="SELECT * FROM summary WHERE Pid='$pid'";
  $res=mysqli_query($connection, $sql);
  $row=array();

  if(mysqli_num_rows($res)==1){
      $row=mysqli_fetch_array($res, MYSQLI_ASSOC);
  }else{
    echo "Multiple rows";
  }

?>
<form class="form-horizontal" method="post" action="actions/summaryUpdate.php">
  <!-- 1-6 -->
  <div class="form-group">
    <div class="col-sm-2">
      <div class="checkbox">
        <label><input type="checkbox" name="Diag1" value="Yes" <?php dispSummary("Diag1");?>>Hypertension</label>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="checkbox">
        <label><input type="checkbox" name="Diag2" value="Yes" <?php dispSummary("Diag2");?>>Newly Diagnosed Hypertension</label>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="checkbox">
        <label><input type="checkbox" name="Diag3" value="Yes" <?php dispSummary("Diag3");?>>Newly Diagnosed Diabetes Mellitus</label>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="checkbox">
        <label><input type="checkbox" name="Diag4" value="Yes" <?php dispSummary("Diag4");?>>Chronic Kidney Disease</label>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="checkbox">
        <label><input type="checkbox" name="Diag5" value="Yes" <?php dispSummary("Diag5");?>>Newly Diagnised CKD</label>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="checkbox">
        <label><input type="checkbox" name="Diag6" value="Yes" <?php dispSummary("Diag6");?>>Hepatis B infection</label>
      </div>
    </div>
  </div>

  <!-- 7-12 -->
  <div class="form-group">
    <div class="col-sm-2">
      <div class="checkbox">
        <label><input type="checkbox" name="Diag7" value="Yes" <?php dispSummary("Diag7");?>>HIV</label>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="checkbox">
        <label><input type="checkbox" name="Diag8" value="Yes" <?php dispSummary("Diag8");?>>Suspicious of SLE</label>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="checkbox">
        <label><input type="checkbox" name="Diag9" value="Yes" <?php dispSummary("Diag9");?>>Suspicious of Autoimmune Disease</label>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="checkbox">
        <label><input type="checkbox" name="Diag10" value="Yes" <?php dispSummary("Diag10");?>>Heart Failure</label>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="checkbox">
        <label><input type="checkbox" name="Diag11" value="Yes" <?php dispSummary("Diag11");?>>Heart Disease</label>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="checkbox">
        <label><input type="checkbox" name="Diag12" value="Yes" <?php dispSummary("Diag12");?>>Arrhythmia</label>
      </div>
    </div>
  </div>

  <!-- 13-18 -->
  <div class="form-group">
    <div class="col-sm-2">
      <div class="checkbox">
        <label><input type="checkbox" name="Diag13" value="Yes" <?php dispSummary("Diag13");?>>Sickle cell Trait</label>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="checkbox">
        <label><input type="checkbox" name="Diag14" value="Yes" <?php dispSummary("Diag14");?>>Sickle cell Disease</label>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="checkbox">
        <label><input type="checkbox" name="Diag15" value="Yes" <?php dispSummary("Diag15");?>>Urinary Tract Infection</label>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="checkbox">
        <label><input type="checkbox" name="Diag16" value="Yes" <?php dispSummary("Diag16");?>>Anaemia</label>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="checkbox">
        <label><input type="checkbox" name="Diag17" value="Yes" <?php dispSummary("Diag17");?>>Pneumonia</label>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="checkbox">
        <label><input type="checkbox" name="Diag18" value="Yes" <?php dispSummary("Diag18");?>>Tuberculosis</label>
      </div>
    </div>
  </div>

  <!-- 19-24 -->
  <div class="form-group">
    <div class="col-sm-2">
      <div class="checkbox">
        <label><input type="checkbox" name="Diag19" value="Yes" <?php dispSummary("Diag19");?>>Diabetes Mellitus</label>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="checkbox">
        <label><input type="checkbox" name="Diag20" value="Yes" <?php dispSummary("Diag20");?>>Hepatopathy</label>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="checkbox">
        <label><input type="checkbox" name="Diag21" value="Yes" <?php dispSummary("Diag21");?>>Bronchitis</label>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="checkbox">
        <label><input type="checkbox" name="Diag22" value="Yes" <?php dispSummary("Diag22");?>>Asthma</label>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="checkbox">
        <label><input type="checkbox" name="Diag23" value="Yes" <?php dispSummary("Diag23");?>>Leukaemia</label>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="checkbox">
        <label><input type="checkbox" name="Diag24" value="Yes" <?php dispSummary("Diag24");?>>Dyslipidaemia</label>
      </div>
    </div>
  </div>

  <!-- 25-30 -->
  <div class="form-group">
    <div class="col-sm-2">
      <div class="checkbox">
        <label><input type="checkbox" name="Diag25" value="Yes" <?php dispSummary("Diag25");?>>Suspicious of Breast Cancer</label>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="checkbox">
        <label><input type="checkbox" name="Diag26" value="Yes" <?php dispSummary("Diag26");?>>Suspicious of Prostate Disease</label>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="checkbox">
        <label><input type="checkbox" name="Diag27" value="Yes" <?php dispSummary("Diag27");?>>Suspicious of Malignancy</label>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="checkbox">
        <label><input type="checkbox" name="Diag28" value="Yes" <?php dispSummary("Diag28");?>>Mental Disorder</label>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="checkbox">
        <label><input type="checkbox" name="Diag29" value="Yes" <?php dispSummary("Diag29");?>>Nervous Disorder</label>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="checkbox">
        <label><input type="checkbox" name="Diag30" value="Yes" <?php dispSummary("Diag30");?>>Hereditary Disorder</label>
      </div>
    </div>
  </div>

  <!-- 31-36 -->
  <div class="form-group">
    <div class="col-sm-2">
      <div class="checkbox">
        <label><input type="checkbox" name="Diag31" value="Yes" <?php dispSummary("Diag31");?>>Ulcer</label>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="checkbox">
        <label><input type="checkbox" name="Diag32" value="Yes" <?php dispSummary("Diag32");?>>Colitis</label>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="checkbox">
        <label><input type="checkbox" name="Diag33" value="Yes" <?php dispSummary("Diag33");?>>Epilepsy</label>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="checkbox">
        <label><input type="checkbox" name="Diag34" value="Yes" <?php dispSummary("Diag34");?>>Emphysema</label>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="checkbox">
        <label><input type="checkbox" name="Diag35" value="Yes" <?php dispSummary("Diag35");?>>Arthritis</label>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="checkbox">
        <label><input type="checkbox" name="Diag36" value="Yes" <?php dispSummary("Diag36");?>>Spondylosis</label>
      </div>
    </div>
  </div>

  <!-- 37 -->
  <div class="form-group">
    <div class="col-sm-2">
      <div class="checkbox">
        <label><input type="checkbox" name="Diag37" value="Yes" <?php dispSummary("Diag37");?>>Back Disorder</label>
      </div>
    </div>
  </div>
  <hr>

  <div class="form-group">
    <label class="control-label col-sm-4">Sickling Phenotype</label>
    <div class="col-sm-8">
      <select name="Diag38" class="form-control">
        <option value="negative">Negative</option>
        <option value="positive">Positive</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4">Sickling Genotype</label>
    <div class="col-sm-8">
      <select name="Diag39" class="form-control">
        <option value="AA">AA</option>
        <option value="AS">AS</option>
        <option value="SS">SS</option>
        <option value="AC">AC</option>
        <option value="SC">SC</option>
        <option value="CC">CC</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4">Blood Group</label>
    <div class="col-sm-8">
      <select name="Diag40" class="form-control">
        <option value="A+">A+</option>
        <option value="B+">B+</option>
        <option value="AB+">AB+</option>
        <option value="O">O</option>
        <option value="A-">A-</option>
        <option value="B-">B-</option>
        <option value="AB-">AB-</option>
        <option value="O-">O-</option>
      </select>
    </div>
  </div>
  <hr>
  <div class="form-group">
    <label class="control-label col-sm-4">Summary</label>
    <?php ndisp("Diag41"); ?>

  <div class="form-group">
    <label class="control-label col-sm-4">Final Summary</label>
    <div class="col-sm-8">
      <textarea  class="form-control" name="Diag42" placeholder="Summary"></textarea>
    </div>
  </div>

<div class="row">
  <div class="col-md-6 col-md-offset-3">
  <input required type="submit"  value="Save" class="btn btn-success btn-block"/>
</div>
</div>
</form>
