# Decorator Pattern

In this example, we have an abstract `Beverage` class, from which various types of beverages are subclassed, e.g. `DarkRoast`, `Decaf`. We utilise decorators in this scenario to add extras to the `Beverage` such as `Soy`, `Mocha` and `Whip`. These decorators accept a concrete instance of our `Beverage` in their constructors and decorate it (in this case by adding to it's base description + cost).

To acheive type matching, which allows us to pass around a decorated version of our `Beverage`, all decorators extend an abstract `CondimentDecorator` class which in turn, extends the `Beverage` class. We could have also used an interface in this scenario to acheive type matching.

## Definitions

### Wikipedia

The decorator pattern (also known as Wrapper, an alternative naming shared with the Adapter pattern) is a design pattern that allows behavior to be added to an individual object, either statically or dynamically, without affecting the behavior of other objects from the same class. The decorator pattern is often useful for adhering to the Single Responsibility Principle, as it allows functionality to be divided between classes with unique areas of concern.

### Head First Design Patterns

Attaches additional responsibilities to an object dynamically. Decorators provide a flexible alternative to subclassing for extending functionality.
