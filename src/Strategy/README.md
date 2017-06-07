# Strategy Pattern

In this example, the behaviours of our `Duck` class have been extracted and encapsulated in their own classes. These behaviours can now be switched at run time via setter methods and can also be re-used amongst other classes.

This facilitates easily adding different types of behaviours without having to interfere with the `Duck` class, thus harmonising with the Open Closed Principle.

## Definitions

### Wikipedia

In computer programming, the strategy pattern (also known as the policy pattern) is a **behavioural** software design pattern that enables an algorithm's behavior to be selected at runtime. 

### Head First Design Patterns

Defines a family of algorithms, encapsulates each one, and makes them interchangeable.