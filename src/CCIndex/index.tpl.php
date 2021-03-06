<h1>Index Controller</h1>
<p>Welcome to Pysen index controller.</p>

<h2>Download</h2>
<p>You can download Pysen from github.</p>
<blockquote>
<code>git clone git://github.com/EllinorBergman/ProjektPysen.git</code>
</blockquote>
<p>You can review its source directly on github: <a href='https://github.com/EllinorBergman/ProjektPysen'>https://github.com/EllinorBergman/ProjektPysen</a></p>

<h2>Installation</h2>
<p>First you have to make the data-directory writable. This is the place where Pysen needs
to be able to write and create files.</p>
<blockquote>
<code>cd ProjektPysen; mkdir site/data</code><br /><br />
<code>chmod 777 site/data</code>
</blockquote>

<p>Second, Pysen has some modules that need to be initialised. You can do this through a 
controller. Point your browser to the following link.</p>
<blockquote>
<a href='<?=create_url('module/install')?>'>module/install</a>
</blockquote>
