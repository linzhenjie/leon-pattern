# EsunPHP

提供设计模式

    Esunphp\Pattern\Singleton  单例
    Esunphp\Pattern\Multiton   多例


使用方式：

    namespace Esunphp\Mvc;
    use Esunphp\Pattern\Multiton;
    
    class View
    {
        use Multiton;
    }
