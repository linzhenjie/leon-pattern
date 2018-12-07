# LeonPHP Pattern

提供设计模式

    Leonphp\Pattern\Singleton  单例
    Leonphp\Pattern\Multiton   多例


使用方式：

    namespace Leonphp\Mvc;
    use Leonphp\Pattern\Multiton;
    
    class View
    {
        use Multiton;
    }
