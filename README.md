# What is Autoload Manager?
Autoload Manager is PHP class with one goal, to make your class autoloading easier.

Here are some feature Autoload Manager currently offers:

* Autoloading from multiple directories using the *registerPath* method.
* Set a prefix or suffix to be used per directory.
* Checks if the class exists before loading it in, no sense in doing something twice!

# What direction can we expect to see Autoload Manager take going forward?
Assuming this is tool people find useful, we'll begin focusing on giving Autoload Manager more features so you can manage your classes as easily as possible.

Some features we're currently working to implement:

* Namespace recognition. Currently, namespaced classes **must** be in a directory structure that coordinates with the namespace being used. While this is highly recommended anyways, we want to make sure your class gets loaded whether or not it follows that system.
* Class finder. Run a simple class method to output a list of classes found and usable by Autoload Manager.
* Root directory. Set the root directory Autoload Manager should work from.
* Default prefix or suffix. Default to a specific prefix or suffix if one is not defined in the path method.

# To sum up...
I hope some of you find this tool useful! Please be sure to contact us if you run into any bugs, have feature requests, or just want to send us message!

*~ Aidan Casey*