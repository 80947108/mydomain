<?php include ('data.php');?>

<!DOCTYPE html>
<html lang="zh-CN">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="renderer" content="webkit">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后 -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="apple-touch-icon" href="favicon.ico">
	<title><?php echo $aik['title'];?></title>
    <?php include ('nav.php');?>
	<div class="container-fluid video-box">
		<div class="container ">
			<div class="tit-name">
			<span>飞哥解析: 正在播放: </span>
			<h1 id="video-title">欢迎光临: 飞哥解析 </h1>
			</div>
			<div class="embed-responsive embed-responsive-16by9">
			<iframe id="palybox" src="<?php echo $aik['jiekou1'];?><?php echo $aik['maurl'];?>" allowtransparency="true" frameborder="0" scrolling="no" allowfullscreen="true" allowtransparency="true"> </iframe>
			</div>
			<div class="row mTB20">
				<div class="input-group" style="width: 100%;">
					<span class="input-group-addon input-lg" style="width: 80px;">解析线路</span>
					<select id="jk" class="form-control input-lg">
					<option value="<?php echo $aik['jiekou1'];?>" selected><?php echo $aik['jiekou1name'];?></option>
					<option value="<?php echo $aik['jiekou2'];?>"><?php echo $aik['jiekou2name'];?></option>
					<option value="<?php echo $aik['jiekou3'];?>"><?php echo $aik['jiekou3name'];?></option>
					<option value="<?php echo $aik['jiekou4'];?>"><?php echo $aik['jiekou4name'];?></option>
					<option value="<?php echo $aik['jiekou5'];?>"><?php echo $aik['jiekou5name'];?></option>
					<option value="<?php echo $aik['jiekou6'];?>"><?php echo $aik['jiekou6name'];?></option>
					<option value="<?php echo $aik['jiekou7'];?>"><?php echo $aik['jiekou7name'];?></option>
					<option value="<?php echo $aik['jiekou8'];?>"><?php echo $aik['jiekou8name'];?></option>
					<option value="<?php echo $aik['jiekou9'];?>"><?php echo $aik['jiekou9name'];?></option>
					<option value="<?php echo $aik['jiekou10'];?>"><?php echo $aik['jiekou10name'];?></option>
					<option value="<?php echo $aik['jiekou11'];?>"><?php echo $aik['jiekou11name'];?></option> 
					<option value="<?php echo $aik['jiekou12'];?>"><?php echo $aik['jiekou12name'];?></option>  
					<option value="<?php echo $aik['jiekou13'];?>"><?php echo $aik['jiekou13name'];?></option>  
					<option value="<?php echo $aik['jiekou14'];?>"><?php echo $aik['jiekou14name'];?></option>  
					<option value="<?php echo $aik['jiekou15'];?>"><?php echo $aik['jiekou15name'];?></option>  
					<option value="<?php echo $aik['jiekou16'];?>"><?php echo $aik['jiekou16name'];?></option>  
					<option value="<?php echo $aik['jiekou17'];?>"><?php echo $aik['jiekou17name'];?></option>  
					<option value="<?php echo $aik['jiekou18'];?>"><?php echo $aik['jiekou18name'];?></option>  
					<option value="<?php echo $aik['jiekou19'];?>"><?php echo $aik['jiekou19name'];?></option>  
					<option value="<?php echo $aik['jiekou20'];?>"><?php echo $aik['jiekou20name'];?></option>  
					<option value="<?php echo $aik['jiekou21'];?>"><?php echo $aik['jiekou21name'];?></option>  
					<option value="<?php echo $aik['jiekou22'];?>"><?php echo $aik['jiekou22name'];?></option>  
					<option value="<?php echo $aik['jiekou23'];?>"><?php echo $aik['jiekou23name'];?></option>  
					<option value="<?php echo $aik['jiekou24'];?>"><?php echo $aik['jiekou24name'];?></option>  
					<option value="<?php echo $aik['jiekou25'];?>"><?php echo $aik['jiekou25name'];?></option>  
					<option value="<?php echo $aik['jiekou26'];?>"><?php echo $aik['jiekou26name'];?></option>  
					<option value="<?php echo $aik['jiekou27'];?>"><?php echo $aik['jiekou27name'];?></option>  
					<option value="<?php echo $aik['jiekou28'];?>"><?php echo $aik['jiekou28name'];?></option>  
					<option value="<?php echo $aik['jiekou29'];?>"><?php echo $aik['jiekou29name'];?></option>  
					<option value="<?php echo $aik['jiekou30'];?>"><?php echo $aik['jiekou30name'];?></option>  
					<option value="<?php echo $aik['jiekou31'];?>"><?php echo $aik['jiekou31name'];?></option>  
					<option value="<?php echo $aik['jiekou32'];?>"><?php echo $aik['jiekou32name'];?></option>  
					<option value="<?php echo $aik['jiekou33'];?>"><?php echo $aik['jiekou33name'];?></option>  
					<option value="<?php echo $aik['jiekou34'];?>"><?php echo $aik['jiekou34name'];?></option>  
					<option value="<?php echo $aik['jiekou35'];?>"><?php echo $aik['jiekou35name'];?></option>  
					<option value="<?php echo $aik['jiekou36'];?>"><?php echo $aik['jiekou36name'];?></option>  
					<option value="<?php echo $aik['jiekou37'];?>"><?php echo $aik['jiekou37name'];?></option>  
					<option value="<?php echo $aik['jiekou38'];?>"><?php echo $aik['jiekou38name'];?></option>  
					<option value="<?php echo $aik['jiekou39'];?>"><?php echo $aik['jiekou39name'];?></option>
					<option value="<?php echo $aik['jiekou40'];?>"><?php echo $aik['jiekou40name'];?></option>
					<option value="<?php echo $aik['jiekou41'];?>"><?php echo $aik['jiekou41name'];?></option>                 	
					</select>
				</div><br>
				<div class="input-group" style="width: 100%;">
				<span class="input-group-addon input-lg" style="width: 80px;">视频地址</span>
				<input type="text" id="url" class="form-control input-lg" placeholder="请输入视频地址">
				</div><br>
				<div>
				<button type="submit" onclick="play()" class="btn btn-primary btn-lg btn-block"> 解析播放 </button>
				</div>		
			    </div>					
            
			<!-- 公告 -->
			<div class="panel panel-default">
			  <div class="panel-heading">
				<h3 class="panel-title">公告</h3>
			  </div>
			  <div class="panel-body">
				<?php echo $aik['gonggao'];?>
			  </div>
			</div>	
		</div>
	</div>
<?php include ('footer.php');?>