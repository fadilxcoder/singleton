## Characteristics of a class that obeys the Singleton Design Pattern

<ol>
<li>A <strong>private constructor</strong> is used to prevent the direct creation of objects from the class.</li>
<li>The expensive process is performed within the private constructor.</li>
<li>The only way to create an instance from the class is by using a static method that creates the object only if it wasn't already created.</li>
</ol>
