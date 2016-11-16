# maven mirror 
##原理
利用联通缓存制作的Mavenmaven镜像
###开源地址
https://coding.net/u/lbp/p/maven_repo/git
##使用
**linux**
```shell
vim ~/.m2/settings.xml
```
**windows**
```shell
C盘下你的用户目录\.m2\settings.xml
```
根据你的情况加入下面的内容
```xml
<settings>
  <mirrors>
    <mirror>
      <id>maven-lbp</id>
      <name>maven-lbp</name>
      <url>http://floating-island-72850.herokuapp.com/maven2</url>
      <mirrorOf>central</mirrorOf>
    </mirror>
  </mirrors>
</settings>
```

Clojure/Lein 配置
>vim ~/.lein/profiles.clj

```clojure
{:user
	{:mirrors
		{
			"central" {:name "maven-lbp"	:url "http://floating-island-72850.herokuapp.com/maven2"}
        	"clojars" {:name "clojars-lbp"	:url "http://floating-island-72850.herokuapp.com/repo"	:repo-manager true}
        }
	}
}
```


![enter description here][1]


  [1]: http://ww3.sinaimg.cn/large/0060hWkWjw1f6ak6jis1gj30j102mwf2.jpg
