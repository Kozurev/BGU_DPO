<?php


/**
 * Класс реализующий два шаблона проектирования, используемых в системе и методы для работы с ними:
 *
 * Observer (наблюдатели):
 *      attachObserver - добавление обработчика при событии
 *      detachObserver - удаление последнего добавленного обработчика для события
 *      notify         - метод оповещения системы о возникновении события
 *
 * Factory (фабрика):
 *      factory - конструктор объектов
 *
 * @author BadWolf
 * @date 21.01.2019
 * @version 2.0.0
 *
 * Class Core
 */
class Core
{

    /**
     * Список установленных наблюдателей
     *
     * @var array
     */
    static private $observers = [];


    /**
     * Создание обработчика для наблюдателя
     *
     * @param $action - название события
     * @param $function - обрабтчик для данного события
     */
    static public function attachObserver( $action, $function )
    {
        Core::$observers[$action][] = $function;
    }


    /**
     * Удаление последнего добавленного обработчика наблюдателя
     *
     * @param $action - название действия
     */
    static public function detachObserver( $action )
    {
        foreach ( Core::$observers as $name => $observers )
        {
            if ( $name == $action )
            {
                array_pop( Core::$observers[$name] );
                return;
            }
        }
    }


    /**
     * Данный метод устанавливается в месте срабатывания наблюдателя
     *
     * @param $args - аргумент для функции обработчика наблюдателя
     * @param $action - название действия
     */
    static public function notify( $args, $action )
    {
        foreach ( Core::$observers as $name => $observers )
        {
            if ( $name == $action )
            {
                foreach ( $observers as $function )
                {
                    $function( $args );
                }
            }
        }
    }


	/**
	 * Подключает необходимый файл и создаёт объект класса
     *
	 * @return mixed
	 */
	static public function factory( $className, $id = 0 )
	{
		//Формирование пути к файлу класса
		$segments = explode( '_', $className );
		$filePath = ROOT . '/model';

		foreach ( $segments as $segment )
        {
            $filePath .= '/' . lcfirst( $segment );
        }


		//Подключение модели
		if ( file_exists( $filePath . '/model.php' ) && !class_exists( $className . '_Model' ) )
		{
			 include_once $filePath . '/model.php';
		}

		//Подключение файла с методами
		if ( file_exists( $filePath . '.php' ) && !class_exists( $className ) )
		{
			 include_once $filePath . '.php';
		}
		
		//Создание объекта класса
		if ( class_exists( $className ) )
        {
            $obj = new $className;
        }
		else
        {
            return null;
        }


		//Если был передан id тогда формируем условия поиска конкретного объекта
		//или возвращаем пустой объект 
		if ( is_numeric( $id ) && intval( $id ) !== 0 )
		{
			return $obj->queryBuilder()
				->where( 'id', '=', $id )
				->find();
		}
		else 
        {
            return $obj;
        }
	}


    /**
     * Метод для передачи в конструктор запросов значение без обрамление в кавычки и прочих проверок
     *
     * @param $val - значение которое не должно быть обработано конструктором запросов Orm
     * @return stdClass
     */
    public static function unchanged( $val )
    {
        $result = new stdClass;
        $result->type = 'unchanged';
        $result->val = $val;
        return $result;
    }
}