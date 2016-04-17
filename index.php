<?php 
	define("BASE_PATH",__DIR__);
	include BASE_PATH.'/system/Loader.php';
	spl_autoload_register('system\Loader::autoload');
	app\Home\Controller\Index::test();
	system\Object::test();
	
// 	$stack = new SplStack();
// 	$stack->push("data1");
// 	$stack->push("data2");
// 	echo $stack->pop();
// 	echo $stack->pop();

// 	$queue = new SplQueue();
// 	$queue->enqueue('data1');
// 	$queue->enqueue('data2');
	
// 	echo $queue->dequeue();
// 	echo $queue->dequeue();
	
// 	$heap = new SplMaxHeap();
// 	$heap->insert('data1');
// 	$heap->insert('data2');
	
// 	echo $heap->extract();
// 	echo $heap->extract();

// 	header("Content-type:text/html;charset=utf8");
// 	$arr = new SplFixedArray(10);
// 	$arr[0] = '第一个';
// 	$arr[9] = '第十个';//下标不能越界
// 	var_export($arr);

// 	$db = new system\Database();
// 	$db->where("id=1");
// 	$db->where("name='wanjn'");
// 	$db->order("sort desc");
// 	$db->limit(10);
	//实现的关键点在于函数返回了$this
// 	$db->where("id=1")->where("name=wanjn")->order("sort desc")->limit(10);
	
	//魔术方法使用
	header("Content-type:text/html;charset=utf8");
// 	$obj = new system\Object();
// 	$obj->title = "标题"; //属性不存在自动调用__set
// 	echo $obj->title;
	
// 	echo $obj->getNameById(22,"www");
	
// 	echo system\Object::test11(22,"wwwwww");
// 	echo $obj;

// 	echo $obj(array("test1","test2","test3")); //Function name must be a string

// 	$db = new system\Database();
	
// 	system\Factory::createDatabse(); //注册器的初始化可以放到环境的初始化里面去
// 	$db = system\Factory::createDatabse();
// 	$db->where("id=2");

	//注册器模式--不调用单例模式和工厂模式
// 	$db = system\Register::get('db1');
	
// 	var_dump($db);
// 	$db->where("id=3");
	
	//适配器模式
// 	$db = new system\DATABASE\PDO();
// 	$db->connect("localhost","root","root","test");
// 	$res = $db->query("show databases");
// 	var_dump($res);
// 	$db->close();
	
	
	/**
	 * 策略模式
	 *将一组特定的行为和算法封装成类，以适应某些特定的上下文环境，这种模式就是策略模式，
	 *在写Page不需要实现UserStrategy的，最终只是在运行过程中才进行绑定，实现了两个类的解耦，这就是
	 *策略模式的依赖倒置， 
	 */
	class Page{
		protected $strategy;
		
		function index(){
			echo "<br />",'Ad',"<br />";
			$this->strategy->showAd();
			echo "<br />",'Category',"<br />";
			$this->strategy->showCategory();
		}
		
		function setStrategy(\system\UserStrategy $strategy){
			$this->strategy = $strategy;
		}
	}
	$page = new Page();
	//下次如果新增了一哥特定的行为，只需要新增一哥策略即可
	if(isset($_GET['gender']) && $_GET['gender']=="female"){
		$strategy = new \system\FemaleUserStrategy();
	}else{
		$strategy  = new \system\MaleUserStrategy();
	}
	$page->setStrategy($strategy);
	$page->index();
	
?>