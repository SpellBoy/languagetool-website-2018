@extends('layouts.app')

@section('title', 'LanguageTool Development')

@section('content')
    <div id="textContent" class="content-section page-development" style="text-align: left">
        <div class="container">

            <h1>Development</h1>

            <h2>API</h2>

            <ul>
                <li><a href="http://wiki.languagetool.org/http-server">How to run your own LanguageTool server</a></li>
                <li><a href="https://languagetool.org/http-api/swagger-ui/#!/default/post_check">HTTP API documentation</a>
                <li><a href="http://wiki.languagetool.org/public-http-api">How to use our public server via HTTP</a>
                <li><a href="http://wiki.languagetool.org/java-api">How to use LanguageTool from Java</a> (<a href="https://languagetool.org/development/api/index.html?org/languagetool/JLanguageTool.html">Javadoc</a>)
            </ul>


            <h2>Improving LanguageTool</h2>

            <p>LanguageTool is an Open Source project and we're looking forward to your contributions.</p>

            <ul>
                <li><a href="https://github.com/languagetool-org/languagetool">Source code at github</a></li>
                <li><a href="http://wiki.languagetool.org">wiki.languagetool.org</a> contains the complete development documentation, including:
                    <ul>
                        <li><a href="http://wiki.languagetool.org/development-overview">Development Overview</a>, for users who want to extend LanguageTool with their own rules
                    </ul>
                </li>
                <li><a href="http://community.languagetool.org">community.languagetool.org</a>,
                    includes <a href="http://community.languagetool.org/ruleEditor2/index?lang=en">a rule editor</a> and
                    <a href="http://community.languagetool.org/analysis">a text analyzer</a></li>
                <li><a href="https://forum.languagetool.org/c/development">Development discussion in our forum</a>
                    <ul>
                        <li><a href="http://www.mail-archive.com/languagetool-devel@lists.sourceforge.net/">Mailing list archive at mail-archive.com</a>
                            (alternatively, use the archive at <a href="http://markmail.org/search/?q=list%3Anet.sourceforge.lists.languagetool-devel">markmail.org</a> or
                            <a href="http://sourceforge.net/mailarchive/forum.php?forum_name=languagetool-devel">Sourceforge</a>) (up to September 2016)</li>
                    </ul>
                </li>
                <li><a href="https://github.com/languagetool-org/languagetool/issues?state=open">Issues / bug tracking at github</a>
                    <ul>
                        <li><a href="https://github.com/languagetool-org/languagetool/issues?labels=easy+fix&amp;state=open">Easy fixes</a>, easy issues for new contributors</li>
                    </ul>
                </li>
                <li><a href="https://github.com/languagetool-org">Source code of related projects (like this website) at github</a></li>
                <li><a href="http://wiki.languagetool.org/development-links">See all development-related links</a></li>
            </ul>


            <h2>Embedding LanguageTool on a Web Page</h2>

            <ul>
                <li><a href="http://wiki.languagetool.org/integration-on-websites">Integration on Websites</a></li>
            </ul>

            <h2>Thanks to</h2>

            <ul>
                <li>Syncro Soft for a free license of the <a href="http://www.oxygenxml.com">oXygen XML editor</a></li>
                <li>ej-technologies for providing us with free licenses of their <a href="http://www.ej-technologies.com/products/jprofiler/overview.html">Java profiler</a></li>
                <li><a href="https://www.discoursehosting.com">DiscourseHosting.com</a> for sponsoring <a href="https://forum.languagetool.org/">our forum</a></li>
            </ul>
            
            <div>
                <a href="http://www.oxygenxml.com" title="Oxygen XML Editor">
                    <img src="/images/development/oxygen190x62.png" width="190" height="62" alt="Oxygen XML Editor" border="0">
                </a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="http://www.ej-technologies.com/products/jprofiler/overview.html">
                    <img src="/images/development/jprofiler_large.png" alt="JProfiler Java profiler logo">
                </a>
            </div>


        </div>
    </div>
@endsection
