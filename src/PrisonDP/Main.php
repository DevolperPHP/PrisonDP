<?php

/*
 *   ____               _ _    _ ______________   ____  __  ____  
    |  _ \             | | |  | |___  /  ____\ \ / /  \/  |/ __ \ 
    | |_) |_   _       | | |  | |  / /| |__   \ V /| \  / | |  | |
    |  _ <| | | |  _   | | |  | | / / |  __|   > < | |\/| | |  | |
    | |_) | |_| | | |__| | |__| |/ /__| |____ / . \| |  | | |__| |
    |____/ \__, |  \____/ \____//_____|______/_/ \_\_|  |_|\____/ 
            __/ |                                                 
           |___/                                                  
 */

namespace PrisonDP;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\scheduler\PluginTask;

use pocketmine\event\block\BlockBreakEvent;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\event\player\PlayerDropItem;
use pocketmine\event\player\PlayerMoveEvent;
use pocketmine\event\block\BlockPlaceEvent;
use pocketmine\event\player\PlayerJoinEvent;

use pocketmine\command\CommandSender;
use pocketmine\command\Command;

use pocketmine\level\Position;
use pocketmine\Player;
use pocketmine\level\Level;
use pocketmine\item\Item;
use pocketmine\math\Vector3;

use pocketmine\utils\TextFormat as Color;
use pocketmine\utils\Config;

use pocketmine\level\sound\AvilUseSound;
use pocketmine\level\particle\SmokeParticle;

use pocketmine\nbt\tag\IntTag;
use pocketmine\nbt\tag\CompoundTag;

class Main extends PluginBase implements Listener{
  
  public $prefix = "§l§f[Mine§6Space]";  
  public $count = 0;
  public $rank = "";
  
  public $loding = false;
  public $lodings = 5;
  
  public $timera = false;
  public $timerb = false
  public $timerc = false;
  public $timerd = false;
  public $timere = false;
  public $timerf = false;
  public $timerg = false;
  public $timerh = false;
  public $timeri = false;
  public $timerj = false;
  public $timerk = false;
  public $timerl = false;
  public $timerm = false;
  public $timern = false;
  public $timero = false;
  public $timerp = false;
  public $timerq = false;
  public $timerr = false;
  public $timers = false;
  public $timert = false;
  public $timeru = false;
  public $timerv = false;
  public $timerw = false;
  public $timerx = false;
  public $timery = false;
  public $timerz = false;
  
  public $a = 300;
  public $b = 420;
  public $c = 420;
  public $d = 420;
  public $e = 500;
  public $f = 500;
  public $g = 500;
  public $h = 500;
  public $i = 650;
  public $j = 700;
  public $k = 750;
  public $l = 750;
  public $m = 800;
  public $n = 800;
  public $o = 800;
  public $p = 800;
  public $q = 800;
  public $r = 900;
  public $s = 900;
  public $t = 900;
  public $u = 900;
  public $v = 900;
  public $w = 900;
  public $x = 900;
  public $y = 900;
  public $z = 900;
  
  public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
    $this->getLogger()->info("$this->prefix §bis §aEnable.");
    $this->getServer()->getScheduler()->scheduleRepeatingTask(new Time($this), 20);
    @mkdir($this->getDataFolder());
		$pos = [
		
				'xa1' => 0,
				'ya1' => 0,
				'za1' => 0,
				'xa2' => 0,
				'ya2' => 0,
				'za2' => 0,
			  'levela' => 'world'
      
        'xb1' => 0,
				'yb1' => 0,
				'zb1' => 0,
        'xb2' => 0,
				'yb2' => 0,
				'zb2' => 0,
			  'levelb' => 'world'
      
        'xc1' => 0,
				'yc1' => 0,
				'zc1' => 0,
        'xc2' => 0,
				'yc2' => 0,
				'zc2' => 0,
        'levelc' => 'world'
      
        'xd1' => 0,
				'yd1' => 0,
				'zd1' => 0,
        'xd1' => 0,
				'yd1' => 0,
				'zd1' => 0,
        'leveld' => 'world'
      
        'xe1' => 0,
				'ye1' => 0,
				'ze1' => 0,
        'xe2' => 0,
				'ye2' => 0,
				'ze2' => 0,
        'levele' => 'world'
      
        'xf1' => 0,
				'yf1' => 0,
				'zf1' => 0,
        'xf2' => 0,
				'yf2' => 0,
				'zf2' => 0,
        'levelf' => 'world'
      
        'xg1' => 0,
				'yg1' => 0,
				'zg1' => 0,
        'xg2' => 0,
				'yg2' => 0,
				'zg2' => 0,
        'levelg' => 'world'
      
        'xh1' => 0,
				'yh1' => 0,
				'zh1' => 0,
        'xh2' => 0,
				'yh2' => 0,
				'zh2' => 0,
        'levelh' => 'world'
      
        'xi1' => 0,
				'yi1' => 0,
				'zi1' => 0,
        'xi2' => 0,
				'yi2' => 0,
				'zi2' => 0,
        'leveli' => 'world'
      
        'xj1' => 0,
				'yj1' => 0,
				'zj1' => 0,
        'xj2' => 0,
				'yj2' => 0,
				'zj2' => 0,
        'levelj' => 'world'
      
        'xk1' => 0,
				'yk1' => 0,
				'zk1' => 0,
        'xk2' => 0,
				'yk2' => 0,
				'zk2' => 0,
        'levelk' => 'world'
      
        'xl1' => 0,
				'yl1' => 0,
				'zl1' => 0,
        'xl2' => 0,
				'yl2' => 0,
				'zl2' => 0,
        'levell' => 'world'
      
        'xm1' => 0,
				'ym1' => 0,
				'zm1' => 0,
        'xm2' => 0,
				'ym2' => 0,
				'zm2' => 0,
        'levelm' => 'world'
      
        'xn1' => 0,
				'yn1' => 0,
				'zn1' => 0,
        'xn2' => 0,
				'yn2' => 0,
				'zn2' => 0,
        'leveln' => 'world'
      
        'xo1' => 0,
				'yo1' => 0,
				'zo1' => 0,
        'xo2' => 0,
				'yo2' => 0,
				'zo2' => 0,
        'levelo' => 'world'
      
        'xp1' => 0,
				'yp1' => 0,
				'zp1' => 0,
        'xp2' => 0,
				'yp2' => 0,
				'zp2' => 0,
        'level2' => 'world'
      
        'xq1' => 0,
				'yq1' => 0,
				'zq1' => 0,
        'xq2' => 0,
				'yq2' => 0,
				'zq2' => 0,
        'levelq' => 'world'
      
        'xr1' => 0,
				'yr1' => 0,
				'zr1' => 0,
        'xr2' => 0,
				'yr2' => 0,
				'zr2' => 0,
        'levelr' => 'world'
      
        'xs1' => 0,
				'ys1' => 0,
				'zs1' => 0,
        'xs2' => 0,
				'ys2' => 0,
				'zs2' => 0,
        'levels' => 'world'
      
        'xt1' => 0,
				'yt1' => 0,
				'zt1' => 0,
        'xt2' => 0,
				'yt2' => 0,
				'zt2' => 0,
        'levelt' => 'world'
      
        'xu1' => 0,
				'yu1' => 0,
				'zu1' => 0,
        'xu2' => 0,
				'yu2' => 0,
				'zu2' => 0,
        'levelu' => 'world'
      
        'xv1' => 0,
				'yv1' => 0,
				'zv1' => 0,
        'xv2' => 0,
				'yv2' => 0,
				'zv2' => 0,
        'levelv' => 'world'
        
        'xw1' => 0,
				'yw1' => 0,
				'zw1' => 0,
        'xw2' => 0,
				'yw2' => 0,
				'zw2' => 0,
        'levelw' => 'world'
      
        'xx1' => 0,
				'yx1' => 0,
				'zx1' => 0,
        'xx2' => 0,
				'yx2' => 0,
				'zx2' => 0,
        'levelx' => 'world'
      
        'xy1' => 0,
				'yy1' => 0,
				'zy1' => 0,
        'xy2' => 0,
				'yy2' => 0,
				'zy2' => 0,
        'levely' => 'world'
      
        'xz1' => 0,
				'yz1' => 0,
				'zz1' => 0,
        'xz2' => 0,
				'yz2' => 0,
				'zz2' => 0,
        'levelz' => 'world'
		
		];
		$cfg = new Config($this->getDataFolder() . "config.yml", Config::YAML,$pos);
		$cfg->save();
    
  }
  
  public function onDisable(){
    $this->getConfig()->save();
  }
	
  public function onJoin(PlayerJoinEvent $event){
    $c = new Config($this->getDataFolder()."players.yml", Config::YAML);
    
    if($c->get($event->getPlayer()->getName()) == null){
      $c->set($event->getPlayer()->getName(), "[A]";
      $c->save();
    }
  }
  
  public function onCommand(CommandSender $sender, Command $cmd, $label, array, $args){
    switch($cmd->getName()){
      case "prison":
        
        if(isset($args[0])){
          switch($args[0]){
            case "a":
              
              if(isset($args[1])){
                switch($args[1]){
                    
                  case "pos1":
                    
                    $xa1 = $sender->getFloorX();
    						    $ya1 = $sender->getFloorY();
    					    	$za1 = $sender->getFloorZ();
    					    	$this->getConfig()->set("xa1", $xa1);
    					    	$this->getConfig()->set("ya1", $ya1);
    					    	$this->getConfig()->set("za1", $za1);
    					     	$this->getConfig()->save();
    					    	$sender->sendMessage(TextFormat::GREEN."- Pos1 set to: ($xa1, $ya1, $za1)");
                    
                    return true;
                    
                  case "pos2":
                    
                    $xa2 = $sender->getFloorX();
    						    $ya2 = $sender->getFloorY();
    					    	$za2 = $sender->getFloorZ();
                    $levela = $sender->getLevel()->getName();
    					    	$this->getConfig()->set("xa2", $xa2);
    					    	$this->getConfig()->set("ya2", $ya2);
    					    	$this->getConfig()->set("za2", $za2);
    					     	$this->getConfig()->save();
                    $this->getConfig()->set("levela", $levela);
    					    	$sender->sendMessage(TextFormat::GREEN."- Pos2 set to: ($xa2, $ya2, $za2)");
                    
                    return true;
                    
                  case "enable":
                    $this->timera = true;
                    
                    return true;
                    
                    case "disable":
                    $this->timera = false;
                    
                    return true;
                }
              }
              
            case "b":
              
              if(isset($args[1])){
                switch($args[1]){
                    
                    case "pos1":
                    
                    $xb1 = $sender->getFloorX();
    						    $yb1 = $sender->getFloorY();
    					    	$zb1 = $sender->getFloorZ();
    					    	$this->getConfig()->set("xb1", $xb1);
    					    	$this->getConfig()->set("yb1", $yb1);
    					    	$this->getConfig()->set("zb1", $zb1);
    					     	$this->getConfig()->save();
    					    	$sender->sendMessage(TextFormat::GREEN."- Pos1 set to: ($xb1, $yb1, $zb1)");
                    
                    return true;
                    
                  case "pos2":
                    
                    $xb2 = $sender->getFloorX();
    						    $yb2 = $sender->getFloorY();
    					    	$zb2 = $sender->getFloorZ();
                    $levelb = $sender->getLevel()->getName();
    					    	$this->getConfig()->set("xb2", $xb2);
    					    	$this->getConfig()->set("yb2", $yb2);
    					    	$this->getConfig()->set("zb2", $zb2);
    					     	$this->getConfig()->save();
                    $this->getConfig()->set("levelb", $levelb);
    					    	$sender->sendMessage(TextFormat::GREEN."- Pos2 set to: ($xb2, $yb2, $zb2)");
                    
                    return true;
                    
                  case "enable":
                    $this->timerb = true;
                    
                    return true;
                    
                    case "disable":
                    $this->timerb = false;
                    
                    return true;
                }
              }
              
            case "c":
              
              if(isset($args[1])){
                switch($args[1]){
				
			case "pos1":
                    
                    $xc1 = $sender->getFloorX();
    						    $yc1 = $sender->getFloorY();
    					    	$zc1 = $sender->getFloorZ();
    					    	$this->getConfig()->set("xc1", $xc1);
    					    	$this->getConfig()->set("yc1", $yc1);
    					    	$this->getConfig()->set("zc1", $zc1);
    					     	$this->getConfig()->save();
    					    	$sender->sendMessage(TextFormat::GREEN."- Pos1 set to: ($xc1, $yc1, $zc1)");
                    
                    return true;
                    
                  case "pos2":
                    
                    $xc2 = $sender->getFloorX();
    						    $yc2 = $sender->getFloorY();
    					    	$zc2 = $sender->getFloorZ();
                    $levelc = $sender->getLevel()->getName();
    					    	$this->getConfig()->set("xc2", $xc2);
    					    	$this->getConfig()->set("yc2", $yc2);
    					    	$this->getConfig()->set("zc2", $zc2);
    					     	$this->getConfig()->save();
                    $this->getConfig()->set("levelb", $levelb);
    					    	$sender->sendMessage(TextFormat::GREEN."- Pos2 set to: ($xc2, $yc2, $zc2)");
                    
                    return true;
                    
                  case "enable":
                    $this->timerc = true;
                    
                    return true;
                    
                    case "disable":
                    $this->timerc = false;
                    
                    return true;	
                }
              }
			  
		  case "d":
			  
			  case "pos1":
                    
                    $xd1 = $sender->getFloorX();
    						    $yd1 = $sender->getFloorY();
    					    	$zd1 = $sender->getFloorZ();
    					    	$this->getConfig()->set("xd1", $xd1);
    					    	$this->getConfig()->set("yd1", $yd1);
    					    	$this->getConfig()->set("zd1", $zd1);
    					     	$this->getConfig()->save();
    					    	$sender->sendMessage(TextFormat::GREEN."- Pos1 set to: ($xd1, $yd1, $zd1)");
                    
                    return true;
                    
                  case "pos2":
                    
                    $xd2 = $sender->getFloorX();
    						    $yd2 = $sender->getFloorY();
    					    	$zd2 = $sender->getFloorZ();
                    $leveld = $sender->getLevel()->getName();
    					    	$this->getConfig()->set("xd2", $xd2);
    					    	$this->getConfig()->set("yd2", $yd2);
    					    	$this->getConfig()->set("zd2", $zd2);
    					     	$this->getConfig()->save();
                    $this->getConfig()->set("levelb", $levelb);
    					    	$sender->sendMessage(TextFormat::GREEN."- Pos2 set to: ($xd2, $yd2, $zd2)");
                    
                    return true;
                    
                  case "enable":
                    $this->timerd = true;
                    
                    return true;
                    
                    case "disable":
                    $this->timerd = false;
                    
                    return true;
          }
        }
	
	    case "e":
		    
		    if(isset($args[1])){
			    switch($args[1]){
					    
					    case "pos1":
                    
                    $xe1 = $sender->getFloorX();
    						    $ye1 = $sender->getFloorY();
    					    	$ze1 = $sender->getFloorZ();
    					    	$this->getConfig()->set("xe1", $xe1);
    					    	$this->getConfig()->set("ye1", $ye1);
    					    	$this->getConfig()->set("ze1", $ze1);
    					     	$this->getConfig()->save();
    					    	$sender->sendMessage(TextFormat::GREEN."- Pos1 set to: ($xe1, $ye1, $ze1)");
                    
                    return true;
                    
                  case "pos2":
                    
                    $xe2 = $sender->getFloorX();
    						    $ye2 = $sender->getFloorY();
    					    	$ze2 = $sender->getFloorZ();
                    $levele = $sender->getLevel()->getName();
    					    	$this->getConfig()->set("xe2", $xe2);
    					    	$this->getConfig()->set("ye2", $ye2);
    					    	$this->getConfig()->set("ze2", $ze2);
    					     	$this->getConfig()->save();
                    $this->getConfig()->set("levele", $levele);
    					    	$sender->sendMessage(TextFormat::GREEN."- Pos2 set to: ($xe2, $ye2, $ze2)");
                    
                    return true;
                    
                  case "enable":
                    $this->timere = true;
                    
                    return true;
                    
                    case "disable":
                    $this->timere = false;
                    
                    return true;
			    }
		    }
		    
	    case "f":
		    if(isset($args[1])){
			    switch($args[1]){
					    
					    case "pos1":
                    
                    $xf1 = $sender->getFloorX();
    						    $yf1 = $sender->getFloorY();
    					    	$zf1 = $sender->getFloorZ();
    					    	$this->getConfig()->set("xf1", $xf1);
    					    	$this->getConfig()->set("yf1", $yf1);
    					    	$this->getConfig()->set("zf1", $zf1);
    					     	$this->getConfig()->save();
    					    	$sender->sendMessage(TextFormat::GREEN."- Pos1 set to: ($xf1, $yf1, $zf1)");
                    
                    return true;
                    
                  case "pos2":
                    
                    $xf2 = $sender->getFloorX();
    						    $yf2 = $sender->getFloorY();
    					    	$zf2 = $sender->getFloorZ();
                    $levelf = $sender->getLevel()->getName();
    					    	$this->getConfig()->set("xf2", $xf2);
    					    	$this->getConfig()->set("yf2", $yf2);
    					    	$this->getConfig()->set("zf2", $zf2);
    					     	$this->getConfig()->save();
                    $this->getConfig()->set("levelf", $levelf);
    					    	$sender->sendMessage(TextFormat::GREEN."- Pos2 set to: ($xf2, $yf2, $zf2)");
                    
                    return true;
                    
                  case "enable":
                    $this->timerf = true;
                    
                    return true;
                    
                    case "disable":
                    $this->timerf = false;
                    
                    return true;
			    }
		    }
		    
	    case "g":
		    
		    if(isset($args[1])){
		      switch($args[1]){
		      
				      case "pos1":
                    
                    $xg1 = $sender->getFloorX();
    						    $yg1 = $sender->getFloorY();
    					    	$zg1 = $sender->getFloorZ();
    					    	$this->getConfig()->set("xg1", $xg1);
    					    	$this->getConfig()->set("yg1", $yg1);
    					    	$this->getConfig()->set("zg1", $zg1);
    					     	$this->getConfig()->save();
    					    	$sender->sendMessage(TextFormat::GREEN."- Pos1 set to: ($xg1, $yg1, $zg1)");
                    
                    return true;
                    
                  case "pos2":
                    
                    $xg2 = $sender->getFloorX();
    						    $yg2 = $sender->getFloorY();
    					    	$zg2 = $sender->getFloorZ();
                    $levelg = $sender->getLevel()->getName();
    					    	$this->getConfig()->set("xg2", $xg2);
    					    	$this->getConfig()->set("yg2", $yg2);
    					    	$this->getConfig()->set("zg2", $zg2);
    					     	$this->getConfig()->save();
                    $this->getConfig()->set("levelg", $levelg);
    					    	$sender->sendMessage(TextFormat::GREEN."- Pos2 set to: ($xg2, $yg2, $zg2)");
                    
                    return true;
                    
                  case "enable":
                    $this->timerg = true;
                    
                    return true;
                    
                    case "disable":
                    $this->timerg = false;
                    
                    return true;
		      }
		    }
		    
	    case "h":
		    
		    if(isset($args[1])){
		      switch($args[1]){
		      
				      case "pos1":
                    
                    $xh1 = $sender->getFloorX();
    						    $yh1 = $sender->getFloorY();
    					    	$zh1 = $sender->getFloorZ();
    					    	$this->getConfig()->set("xh1", $xh1);
    					    	$this->getConfig()->set("yh1", $yh1);
    					    	$this->getConfig()->set("zh1", $zh1);
    					     	$this->getConfig()->save();
    					    	$sender->sendMessage(TextFormat::GREEN."- Pos1 set to: ($xh1, $yh1, $zh1)");
                    
                    return true;
                    
                  case "pos2":
                    
                    $xh2 = $sender->getFloorX();
    						    $yh2 = $sender->getFloorY();
    					    	$zh2 = $sender->getFloorZ();
                    $levelh = $sender->getLevel()->getName();
    					    	$this->getConfig()->set("xh2", $xh2);
    					    	$this->getConfig()->set("yh2", $yh2);
    					    	$this->getConfig()->set("zh2", $zh2);
    					     	$this->getConfig()->save();
                    $this->getConfig()->set("levelh", $levelh);
    					    	$sender->sendMessage(TextFormat::GREEN."- Pos2 set to: ($xh2, $yh2, $zh2)");
                    
                    return true;
                    
                  case "enable":
                    $this->timerh = true;
                    
                    return true;
                    
                    case "disable":
                    $this->timerh = false;
                    
                    return true;
		      }
		    }
		    
	    case "i":
		    
		    if(isset($args[1])){
		      switch($args[1]){
		      
				      case "pos1":
                    
                    $xi1 = $sender->getFloorX();
    						    $yi1 = $sender->getFloorY();
    					    	$zi1 = $sender->getFloorZ();
    					    	$this->getConfig()->set("xi1", $xi1);
    					    	$this->getConfig()->set("yi1", $yi1);
    					    	$this->getConfig()->set("zi1", $zi1);
    					     	$this->getConfig()->save();
    					    	$sender->sendMessage(TextFormat::GREEN."- Pos1 set to: ($xi1, $yi1, $zi1)");
                    
                    return true;
                    
                  case "pos2":
                    
                    $xi2 = $sender->getFloorX();
    						    $yi2 = $sender->getFloorY();
    					    	$zi2 = $sender->getFloorZ();
                    $leveli = $sender->getLevel()->getName();
    					    	$this->getConfig()->set("xi2", $xi2);
    					    	$this->getConfig()->set("yi2", $yi2);
    					    	$this->getConfig()->set("zi2", $zi2);
    					     	$this->getConfig()->save();
                    $this->getConfig()->set("leveli", $leveli);
    					    	$sender->sendMessage(TextFormat::GREEN."- Pos2 set to: ($xi2, $yi2, $zi2)");
                    
                    return true;
                    
                  case "enable":
                    $this->timeri = true;
                    
                    return true;
                    
                    case "disable":
                    $this->timeri = false;
                    
                    return true;
		      }
		    }
		    
	    case "j":
		    
		    if(isset($args[1])){
		      switch($args[1]){
		      
				      case "pos1":
                    
                    $xj1 = $sender->getFloorX();
    						    $yj1 = $sender->getFloorY();
    					    	$zj1 = $sender->getFloorZ();
    					    	$this->getConfig()->set("xj1", $xj1);
    					    	$this->getConfig()->set("yj1", $yj1);
    					    	$this->getConfig()->set("zj1", $zj1);
    					     	$this->getConfig()->save();
    					    	$sender->sendMessage(TextFormat::GREEN."- Pos1 set to: ($xj1, $yj1, $zj1)");
                    
                    return true;
                    
                  case "pos2":
                    
                    $xj2 = $sender->getFloorX();
    						    $yj2 = $sender->getFloorY();
    					    	$zj2 = $sender->getFloorZ();
                    $levelj = $sender->getLevel()->getName();
    					    	$this->getConfig()->set("xj2", $xj2);
    					    	$this->getConfig()->set("yj2", $yj2);
    					    	$this->getConfig()->set("zj2", $zj2);
    					     	$this->getConfig()->save();
                    $this->getConfig()->set("levelj", $levelj);
    					    	$sender->sendMessage(TextFormat::GREEN."- Pos2 set to: ($xj2, $yj2, $zj2)");
                    
                    return true;
                    
                  case "enable":
                    $this->timerj = true;
                    
                    return true;
                    
                    case "disable":
                    $this->timerj = false;
                    
                    return true;
		      }
		    }
		    
	    case "k":
		    
		    if(isset($args[1])){
		      switch($args[1]){
		      
				      case "pos1":
                    
                    $xk1 = $sender->getFloorX();
    						    $yk1 = $sender->getFloorY();
    					    	$zk1 = $sender->getFloorZ();
    					    	$this->getConfig()->set("xk1", $xk1);
    					    	$this->getConfig()->set("yk1", $yk1);
    					    	$this->getConfig()->set("zk1", $zk1);
    					     	$this->getConfig()->save();
    					    	$sender->sendMessage(TextFormat::GREEN."- Pos1 set to: ($xk1, $yk1, $zk1)");
                    
                    return true;
                    
                  case "pos2":
                    
                    $xk2 = $sender->getFloorX();
    						    $yk2 = $sender->getFloorY();
    					    	$zk2 = $sender->getFloorZ();
                    $levelk = $sender->getLevel()->getName();
    					    	$this->getConfig()->set("xk2", $xk2);
    					    	$this->getConfig()->set("yk2", $yk2);
    					    	$this->getConfig()->set("zk2", $zk2);
    					     	$this->getConfig()->save();
                    $this->getConfig()->set("levelk", $levelk);
    					    	$sender->sendMessage(TextFormat::GREEN."- Pos2 set to: ($xk2, $yk2, $zk2)");
                    
                    return true;
                    
                  case "enable":
                    $this->timerk = true;
                    
                    return true;
                    
                    case "disable":
                    $this->timerk = false;
                    
                    return true;
		      }
		    }
		    
	    case "l":
		    
		    if(isset($args[1])){
		      switch($args[1]){
		      
				      case "pos1":
                    
                    $xl1 = $sender->getFloorX();
    						    $yl1 = $sender->getFloorY();
    					    	$zl1 = $sender->getFloorZ();
    					    	$this->getConfig()->set("xl1", $xl1);
    					    	$this->getConfig()->set("yl1", $yl1);
    					    	$this->getConfig()->set("zl1", $zl1);
    					     	$this->getConfig()->save();
    					    	$sender->sendMessage(TextFormat::GREEN."- Pos1 set to: ($xl1, $yl1, $zl1)");
                    
                    return true;
                    
                  case "pos2":
                    
                    $xl2 = $sender->getFloorX();
    						    $yl2 = $sender->getFloorY();
    					    	$zl2 = $sender->getFloorZ();
                    $levell = $sender->getLevel()->getName();
    					    	$this->getConfig()->set("xl2", $xl2);
    					    	$this->getConfig()->set("yl2", $yl2);
    					    	$this->getConfig()->set("zl2", $zl2);
    					     	$this->getConfig()->save();
                    $this->getConfig()->set("levell", $levell);
    					    	$sender->sendMessage(TextFormat::GREEN."- Pos2 set to: ($xl2, $yl2, $zl2)");
                    
                    return true;
                    
                  case "enable":
                    $this->timerl = true;
                    
                    return true;
                    
                    case "disable":
                    $this->timerl = false;
                    
                    return true;
		      }
		    }
		    
	    case "m":
		    
		    if(isset($args[1])){
		      switch($args[1]){
		      
				      case "pos1":
                    
                    $xm1 = $sender->getFloorX();
    						    $ym1 = $sender->getFloorY();
    					    	$zm1 = $sender->getFloorZ();
    					    	$this->getConfig()->set("xm1", $xm1);
    					    	$this->getConfig()->set("ym1", $ym1);
    					    	$this->getConfig()->set("zm1", $zm1);
    					     	$this->getConfig()->save();
    					    	$sender->sendMessage(TextFormat::GREEN."- Pos1 set to: ($xm1, $ym1, $zm1)");
                    
                    return true;
                    
                  case "pos2":
                    
                    $xm2 = $sender->getFloorX();
    						    $ym2 = $sender->getFloorY();
    					    	$zm2 = $sender->getFloorZ();
                    $levelm = $sender->getLevel()->getName();
    					    	$this->getConfig()->set("xm2", $xm2);
    					    	$this->getConfig()->set("ym2", $ym2);
    					    	$this->getConfig()->set("zm2", $zm2);
    					     	$this->getConfig()->save();
                    $this->getConfig()->set("levelm", $levelm);
    					    	$sender->sendMessage(TextFormat::GREEN."- Pos2 set to: ($xm2, $ym2, $zm2)");
                    
                    return true;
                    
                  case "enable":
                    $this->timerm = true;
                    
                    return true;
                    
                    case "disable":
                    $this->timerm = false;
                    
                    return true;
		      }
		    }
		    
	    case "n":
		    
		    if(isset($args[1])){
		      switch($args[1]){
		        
				      case "pos1":
                    
                    $xn1 = $sender->getFloorX();
    						    $yn1 = $sender->getFloorY();
    					    	$zn1 = $sender->getFloorZ();
    					    	$this->getConfig()->set("xn1", $xn1);
    					    	$this->getConfig()->set("yn1", $yn1);
    					    	$this->getConfig()->set("zn1", $zn1);
    					     	$this->getConfig()->save();
    					    	$sender->sendMessage(TextFormat::GREEN."- Pos1 set to: ($xn1, $yn1, $zn1)");
                    
                    return true;
                    
                  case "pos2":
                    
                    $xn2 = $sender->getFloorX();
    						    $yn2 = $sender->getFloorY();
    					    	$zn2 = $sender->getFloorZ();
                    $leveln = $sender->getLevel()->getName();
    					    	$this->getConfig()->set("xn2", $xn2);
    					    	$this->getConfig()->set("yn2", $yn2);
    					    	$this->getConfig()->set("zn2", $zn2);
    					     	$this->getConfig()->save();
                    $this->getConfig()->set("leveln", $leveln);
    					    	$sender->sendMessage(TextFormat::GREEN."- Pos2 set to: ($xn2, $yn2, $zn2)");
                    
                    return true;
                    
                  case "enable":
                    $this->timern = true;
                    
                    return true;
                    
                    case "disable":
                    $this->timern = false;
                    
                    return true;
		      }
		    }
		    
	    case "o":
		    
		    if(isset($args[1])){
		      switch($args[1]){
		      
				      case "pos1":
                    
                    $xo1 = $sender->getFloorX();
    						    $yo1 = $sender->getFloorY();
    					    	$zo1 = $sender->getFloorZ();
    					    	$this->getConfig()->set("xo1", $xo1);
    					    	$this->getConfig()->set("yo1", $yo1);
    					    	$this->getConfig()->set("zo1", $zo1);
    					     	$this->getConfig()->save();
    					    	$sender->sendMessage(TextFormat::GREEN."- Pos1 set to: ($xo1, $yo1, $zo1)");
                    
                    return true;
                    
                  case "pos2":
                    
                    $xo2 = $sender->getFloorX();
    						    $yo2 = $sender->getFloorY();
    					    	$zo2 = $sender->getFloorZ();
                    $levelo = $sender->getLevel()->getName();
    					    	$this->getConfig()->set("xo2", $xo2);
    					    	$this->getConfig()->set("yo2", $yo2);
    					    	$this->getConfig()->set("zo2", $zo2);
    					     	$this->getConfig()->save();
                    $this->getConfig()->set("levelo", $levelo);
    					    	$sender->sendMessage(TextFormat::GREEN."- Pos2 set to: ($xo2, $yo2, $zo2)");
                    
                    return true;
                    
                  case "enable":
                    $this->timero = true;
                    
                    return true;
                    
                    case "disable":
                    $this->timero = false;
                    
                    return true;
		      }
		    }
		    
	    case "p":
		    
		    if(isset($args[1])){
		      switch($args[1]){
		      
				      case "pos1":
                    
                    $xp1 = $sender->getFloorX();
    						    $yp1 = $sender->getFloorY();
    					    	$zp1 = $sender->getFloorZ();
    					    	$this->getConfig()->set("xp1", $xp1);
    					    	$this->getConfig()->set("yp1", $yp1);
    					    	$this->getConfig()->set("zp1", $zp1);
    					     	$this->getConfig()->save();
    					    	$sender->sendMessage(TextFormat::GREEN."- Pos1 set to: ($xp1, $yp1, $zp1)");
                    
                    return true;
                    
                  case "pos2":
                    
                    $xp2 = $sender->getFloorX();
    						    $yp2 = $sender->getFloorY();
    					    	$zp2 = $sender->getFloorZ();
                    $levelg = $sender->getLevel()->getName();
    					    	$this->getConfig()->set("xp2", $xp2);
    					    	$this->getConfig()->set("yp2", $yp2);
    					    	$this->getConfig()->set("zp2", $zp2);
    					     	$this->getConfig()->save();
                    $this->getConfig()->set("levelp", $levelp);
    					    	$sender->sendMessage(TextFormat::GREEN."- Pos2 set to: ($xp2, $yp2, $zp2)");
                    
                    return true;
                    
                  case "enable":
                    $this->timerp = true;
                    
                    return true;
                    
                    case "disable":
                    $this->timerp = false;
                    
                    return true;
		      }
		    }
		    
	    case "q":
		    
		    if(isset($args[1])){
		      switch($args[1])){
		      
				      case "pos1":
                    
                    $xq1 = $sender->getFloorX();
    						    $yq1 = $sender->getFloorY();
    					    	$zq1 = $sender->getFloorZ();
    					    	$this->getConfig()->set("xq1", $xq1);
    					    	$this->getConfig()->set("yq1", $yq1);
    					    	$this->getConfig()->set("zq1", $zq1);
    					     	$this->getConfig()->save();
    					    	$sender->sendMessage(TextFormat::GREEN."- Pos1 set to: ($xq1, $yq1, $zq1)");
                    
                    return true;
                    
                  case "pos2":
                    
                    $xq2 = $sender->getFloorX();
    						    $yq2 = $sender->getFloorY();
    					    	$zq2 = $sender->getFloorZ();
                    $levelq = $sender->getLevel()->getName();
    					    	$this->getConfig()->set("xq2", $xq2);
    					    	$this->getConfig()->set("yq2", $yq2);
    					    	$this->getConfig()->set("zq2", $zq2);
    					     	$this->getConfig()->save();
                    $this->getConfig()->set("levelq", $levelq);
    					    	$sender->sendMessage(TextFormat::GREEN."- Pos2 set to: ($xq2, $yq2, $zq2)");
                    
                    return true;
                    
                  case "enable":
                    $this->timerq = true;
                    
                    return true;
                    
                    case "disable":
                    $this->timerq = false;
                    
                    return true;
		      }
		    }
		    
	    case "r":
		    
		    if(isset($args[1])){
		      switch($args[1])){
		      
				      case "pos1":
                    
                    $xr1 = $sender->getFloorX();
    						    $yr1 = $sender->getFloorY();
    					    	$zr1 = $sender->getFloorZ();
    					    	$this->getConfig()->set("xr1", $xr1);
    					    	$this->getConfig()->set("yr1", $yr1);
    					    	$this->getConfig()->set("zr1", $zr1);
    					     	$this->getConfig()->save();
    					    	$sender->sendMessage(TextFormat::GREEN."- Pos1 set to: ($xr1, $yr1, $zr1)");
                    
                    return true;
                    
                  case "pos2":
                    
                    $xr2 = $sender->getFloorX();
    						    $yr2 = $sender->getFloorY();
    					    	$zr2 = $sender->getFloorZ();
                    $levelr = $sender->getLevel()->getName();
    					    	$this->getConfig()->set("xr2", $xr2);
    					    	$this->getConfig()->set("yr2", $yr2);
    					    	$this->getConfig()->set("zr2", $zr2);
    					     	$this->getConfig()->save();
                    $this->getConfig()->set("levelr", $levelr);
    					    	$sender->sendMessage(TextFormat::GREEN."- Pos2 set to: ($xr2, $yr2, $zr2)");
                    
                    return true;
                    
                  case "enable":
                    $this->timerr = true;
                    
                    return true;
                    
                    case "disable":
                    $this->timerr = false;
                    
                    return true;
		      }
		    }
		    
	    case "s":
		    
		    if(isset($args[1])){
		      switch($args[1]){
		      
				      case "pos1":
                    
                    $xs1 = $sender->getFloorX();
    						    $ys1 = $sender->getFloorY();
    					    	$zs1 = $sender->getFloorZ();
    					    	$this->getConfig()->set("xs1", $xs1);
    					    	$this->getConfig()->set("ys1", $ys1);
    					    	$this->getConfig()->set("zs1", $zs1);
    					     	$this->getConfig()->save();
    					    	$sender->sendMessage(TextFormat::GREEN."- Pos1 set to: ($xs1, $ys1, $zs1)");
                    
                    return true;
                    
                  case "pos2":
                    
                    $xs2 = $sender->getFloorX();
    						    $ys2 = $sender->getFloorY();
    					    	$zs2 = $sender->getFloorZ();
                    $levels = $sender->getLevel()->getName();
    					    	$this->getConfig()->set("xs2", $xs2);
    					    	$this->getConfig()->set("ys2", $ys2);
    					    	$this->getConfig()->set("zs2", $zs2);
    					     	$this->getConfig()->save();
                    $this->getConfig()->set("levels", $levels);
    					    	$sender->sendMessage(TextFormat::GREEN."- Pos2 set to: ($xs2, $ys2, $zs2)");
                    
                    return true;
                    
                  case "enable":
                    $this->timers = true;
                    
                    return true;
                    
                    case "disable":
                    $this->timers = false;
                    
                    return true;
		      }
		    }
		    
	    case "t":
		    
		    if(isset($args[1])){
		      switch($args[1]){
		        
				case "pos1":
                    
                    $xt1 = $sender->getFloorX();
    						    $yt1 = $sender->getFloorY();
    					    	$zt1 = $sender->getFloorZ();
    					    	$this->getConfig()->set("xt1", $xt1);
    					    	$this->getConfig()->set("yt1", $yt1);
    					    	$this->getConfig()->set("zt1", $zt1);
    					     	$this->getConfig()->save();
    					    	$sender->sendMessage(TextFormat::GREEN."- Pos1 set to: ($xt1, $yt1, $zt1)");
                    
                    return true;
                    
                  case "pos2":
                    
                    $xt2 = $sender->getFloorX();
    						    $yt2 = $sender->getFloorY();
    					    	$zt2 = $sender->getFloorZ();
                    $levelt = $sender->getLevel()->getName();
    					    	$this->getConfig()->set("xt2", $xt2);
    					    	$this->getConfig()->set("yt2", $yt2);
    					    	$this->getConfig()->set("zt2", $zt2);
    					     	$this->getConfig()->save();
                    $this->getConfig()->set("levelt", $levelt);
    					    	$sender->sendMessage(TextFormat::GREEN."- Pos2 set to: ($xt2, $yt2, $zt2)");
                    
                    return true;
                    
                  case "enable":
                    $this->timert = true;
                    
                    return true;
                    
                    case "disable":
                    $this->timert = false;
                    
                    return true;      
		      }
		    }
		    
	    case "u":
		    
		    if(isset($args[1])){
		      switch($args[1]){
		      
				      case "pos1":
                    
                    $xu1 = $sender->getFloorX();
    						    $yu1 = $sender->getFloorY();
    					    	$zu1 = $sender->getFloorZ();
    					    	$this->getConfig()->set("xu1", $xu1);
    					    	$this->getConfig()->set("yu1", $yu1);
    					    	$this->getConfig()->set("zu1", $zu1);
    					     	$this->getConfig()->save();
    					    	$sender->sendMessage(TextFormat::GREEN."- Pos1 set to: ($xu1, $yu1, $zu1)");
                    
                    return true;
                    
                  case "pos2":
                    
                    $xu2 = $sender->getFloorX();
    						    $yu2 = $sender->getFloorY();
    					    	$zu2 = $sender->getFloorZ();
                    $levelu = $sender->getLevel()->getName();
    					    	$this->getConfig()->set("xu2", $xu2);
    					    	$this->getConfig()->set("yu2", $yu2);
    					    	$this->getConfig()->set("zu2", $zu2);
    					     	$this->getConfig()->save();
                    $this->getConfig()->set("levelu", $levelu);
    					    	$sender->sendMessage(TextFormat::GREEN."- Pos2 set to: ($xu2, $yu2, $zu2)");
                    
                    return true;
                    
                  case "enable":
                    $this->timeru = true;
                    
                    return true;
                    
                    case "disable":
                    $this->timeru = false;
                    
                    return true;
		      }
		    }
		    
	    case "v":
		    
		    if(isset($args[1])){
		      switch($args[1]){
		        
				      
				      case "pos1":
                    
                    $xv1 = $sender->getFloorX();
    						    $yv1 = $sender->getFloorY();
    					    	$zv1 = $sender->getFloorZ();
    					    	$this->getConfig()->set("xv1", $xv1);
    					    	$this->getConfig()->set("yv1", $yv1);
    					    	$this->getConfig()->set("zv1", $zv1);
    					     	$this->getConfig()->save();
    					    	$sender->sendMessage(TextFormat::GREEN."- Pos1 set to: ($xv1, $yv1, $zv1)");
                    
                    return true;
                    
                  case "pos2":
                    
                    $xv2 = $sender->getFloorX();
    						    $yv2 = $sender->getFloorY();
    					    	$zv2 = $sender->getFloorZ();
                    $levelv = $sender->getLevel()->getName();
    					    	$this->getConfig()->set("xv2", $xv2);
    					    	$this->getConfig()->set("yv2", $yv2);
    					    	$this->getConfig()->set("zv2", $zv2);
    					     	$this->getConfig()->save();
                    $this->getConfig()->set("levelv", $levelv);
    					    	$sender->sendMessage(TextFormat::GREEN."- Pos2 set to: ($xv2, $yv2, $zv2)");
                    
                    return true;
                    
                  case "enable":
                    $this->timerv = true;
                    
                    return true;
                    
                    case "disable":
                    $this->timerv = false;
                    
                    return true;
		      }
		    }
		    
	    case "w":
		    
		    if(isset($args[1])){
		      switch($args[1]){
		        
				      case "pos1":
                    
                    $xw1 = $sender->getFloorX();
    						    $yw1 = $sender->getFloorY();
    					    	$zw1 = $sender->getFloorZ();
    					    	$this->getConfig()->set("xw1", $xw1);
    					    	$this->getConfig()->set("yw1", $yw1);
    					    	$this->getConfig()->set("zw1", $zw1);
    					     	$this->getConfig()->save();
    					    	$sender->sendMessage(TextFormat::GREEN."- Pos1 set to: ($xw1, $yw1, $zw1)");
                    
                    return true;
                    
                  case "pos2":
                    
                    $xw2 = $sender->getFloorX();
    						    $yw2 = $sender->getFloorY();
    					    	$zw2 = $sender->getFloorZ();
                    $levelw = $sender->getLevel()->getName();
    					    	$this->getConfig()->set("xw2", $xw2);
    					    	$this->getConfig()->set("yw2", $yw2);
    					    	$this->getConfig()->set("zw2", $zw2);
    					     	$this->getConfig()->save();
                    $this->getConfig()->set("levelw", $levelw);
    					    	$sender->sendMessage(TextFormat::GREEN."- Pos2 set to: ($xw2, $yw2, $zw2)");
                    
                    return true;
                    
                  case "enable":
                    $this->timerw = true;
                    
                    return true;
                    
                    case "disable":
                    $this->timerw = false;
                    
                    return true;
		      }
		    }
		    
	    case "x":
		    
		    if(isset($args[1])){
		      switch($args[1]){
		      
				      case "pos1":
                    
                    $xx1 = $sender->getFloorX();
    						    $yx1 = $sender->getFloorY();
    					    	$zx1 = $sender->getFloorZ();
    					    	$this->getConfig()->set("xx1", $xx1);
    					    	$this->getConfig()->set("yx1", $yx1);
    					    	$this->getConfig()->set("zx1", $zx1);
    					     	$this->getConfig()->save();
    					    	$sender->sendMessage(TextFormat::GREEN."- Pos1 set to: ($xx1, $yx1, $zx1)");
                    
                    return true;
                    
                  case "pos2":
                    
                    $xx2 = $sender->getFloorX();
    						    $yx2 = $sender->getFloorY();
    					    	$zx2 = $sender->getFloorZ();
                    $levelx = $sender->getLevel()->getName();
    					    	$this->getConfig()->set("xx2", $xx2);
    					    	$this->getConfig()->set("yx2", $yx2);
    					    	$this->getConfig()->set("zx2", $zx2);
    					     	$this->getConfig()->save();
                    $this->getConfig()->set("levelx", $levelx);
    					    	$sender->sendMessage(TextFormat::GREEN."- Pos2 set to: ($xx2, $yx2, $zx2)");
                    
                    return true;
                    
                  case "enable":
                    $this->timerx = true;
                    
                    return true;
                    
                    case "disable":
                    $this->timerx = false;
                    
                    return true;
		      }
		    }
		    
	    case "y":
		    
		    if(isset($args[1])){
		      switch($args[1]){
		      
				      case "pos1":
                    
                    $xy1 = $sender->getFloorX();
    						    $yy1 = $sender->getFloorY();
    					    	$zy1 = $sender->getFloorZ();
    					    	$this->getConfig()->set("xy1", $xy1);
    					    	$this->getConfig()->set("yy1", $yy1);
    					    	$this->getConfig()->set("zy1", $zy1);
    					     	$this->getConfig()->save();
    					    	$sender->sendMessage(TextFormat::GREEN."- Pos1 set to: ($xy1, $yy1, $zy1)");
                    
                    return true;
                    
                  case "pos2":
                    
                    $xy2 = $sender->getFloorX();
    						    $yy2 = $sender->getFloorY();
    					    	$zy2 = $sender->getFloorZ();
                    $levely = $sender->getLevel()->getName();
    					    	$this->getConfig()->set("xy2", $xy2);
    					    	$this->getConfig()->set("yy2", $yy2);
    					    	$this->getConfig()->set("zy2", $zy2);
    					     	$this->getConfig()->save();
                    $this->getConfig()->set("levely", $levely);
    					    	$sender->sendMessage(TextFormat::GREEN."- Pos2 set to: ($xy2, $yy2, $zy2)");
                    
                    return true;
                    
                  case "enable":
                    $this->timery = true;
                    
                    return true;
                    
                    case "disable":
                    $this->timery = false;
                    
                    return true;
		      }
		    }
		    
	    case "z":
		    
		    if(isset($args[1])){
		      switch($args[1]){
		      
				      case "pos1":
                    
                    $xz1 = $sender->getFloorX();
    						    $yz1 = $sender->getFloorY();
    					    	$zz1 = $sender->getFloorZ();
    					    	$this->getConfig()->set("xz1", $xz1);
    					    	$this->getConfig()->set("yz1", $yz1);
    					    	$this->getConfig()->set("zz1", $zz1);
    					     	$this->getConfig()->save();
    					    	$sender->sendMessage(TextFormat::GREEN."- Pos1 set to: ($xz1, $yz1, $zz1)");
                    
                    return true;
                    
                  case "pos2":
                    
                    $xz2 = $sender->getFloorX();
    						    $yz2 = $sender->getFloorY();
    					    	$zz2 = $sender->getFloorZ();
                    $levelz = $sender->getLevel()->getName();
    					    	$this->getConfig()->set("xz2", $xz2);
    					    	$this->getConfig()->set("yz2", $yz2);
    					    	$this->getConfig()->set("zz2", $zz2);
    					     	$this->getConfig()->save();
                    $this->getConfig()->set("levelz", $levelz);
    					    	$sender->sendMessage(TextFormat::GREEN."- Pos2 set to: ($xz2, $yz2, $zz2)");
                    
                    return true;
                    
                  case "enable":
                    $this->timerz = true;
                    
                    return true;
                    
                    case "disable":
                    $this->timerz = false;
                    
                    return true;
		      }
		    }
		    
	    case "rankup":
		    
		    if($this->rank == "[A]"){
			    $this->count = $this->count - 2000;
			    $this->rank = "[B]";
			    $sender->sendMessage("$this->prefix Your Rank now is [B]");
		    } elseif {
			    $this->count < 2000;
			    $sender->sendMessage("$this->prefix You Don't have a lot of money to be Rank [B]");
			     $sender->sendMessage("$this->prefix You need 2000$");
		    }
		    
		    if($this->rank == "[B]"){
			    $this->count = $this->count - 3000;
			    $this->rank = "[C]";
			    $sender->sendMessage("$this->prefix Your Rank now is [C]");
		    } elseif {
			    $this->count < 3000;
			    $sender->sendMessage("$this->prefix You Don't have a lot of money to be Rank [C]");
			     $sender->sendMessage("$this->prefix You need 3000$");
		    }
		    
		    if($this->rank == "[C]"){
			    $this->count = $this->count - 5000;
			    $this->rank = "[D]";
			    $sender->sendMessage("$this->prefix Your Rank now is [D]");
		    } elseif {
			    $this->count < 5000;
			    $sender->sendMessage("$this->prefix You Don't have a lot of money to be Rank [D]");
			     $sender->sendMessage("$this->prefix You need 5000$");
		    }
		    
		    if($this->rank == "[D]"){
			    $this->count = $this->count - 6000;
			    $this->rank = "[E]";
			    $sender->sendMessage("$this->prefix Your Rank now is [E]");
		    } elseif {
			    $this->count < 6000;
			    $sender->sendMessage("$this->prefix You Don't have a lot of money to be Rank [E]");
			     $sender->sendMessage("$this->prefix You need 6000$");
		    }
		    
		    if($this->rank == "[E]"){
			    $this->count = $this->count - 8000;
			    $this->rank = "[F]";
			    $sender->sendMessage("$this->prefix Your Rank now is [F]");
		    } elseif {
			    $this->count < 8000;
			    $sender->sendMessage("$this->prefix You Don't have a lot of money to be Rank [F]");
			     $sender->sendMessage("$this->prefix You need 8000$");
		    }
    }
  }
}
