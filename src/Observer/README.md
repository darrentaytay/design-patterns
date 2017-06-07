# Observer Pattern

In this example, the `WeatherData` class is the `Subject` and is subscribed to by a handful of `Display` classes which take the provided data and display it slightly differently.

Whenever the `WeatherData` class receives new data, it notifies all of it's subscribers who can they take the data and do as they please with it.

It feels wrong to me in this example that the `Subscribers` subscribe themselves to the `Subject` in their `__construct()`. It adds an unecessary dependency to the `Display` concretions. I'd rather do something like as follows, where the client controls the subscribing and unsubscribing of observers:

```
$weatherData = new WeatherData();
$weatherData->registerObserver(new CurrentConditionsDisplay());
$weatherData->setMeasurements(80, 65, 30.4);
```

## Definitions

### Wikipedia

The observer pattern is a software design pattern in which an object, called the subject, maintains a list of its dependents, called observers, and notifies them automatically of any state changes, usually by calling one of their methods.

### Head First Design Patterns

Defines a one-to-many dependency between objects so that one object changes state, all of it's dependents are notified.
