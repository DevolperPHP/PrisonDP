<?php

namespace PrisonDP;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\scheduler\PluginTask;

use pocketmine\event\block\BlockBreakEvent;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\event\player\PlayerDropItem;
use pocketmine\event\player\PlayerMoveEvent;
use pocketmine\event\block\BlockPlaceEvent;

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
  public $rank = 0;
  
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
                    
                }
              }
          }
        }
    }
  }
  
}
