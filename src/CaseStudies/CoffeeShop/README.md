# Case Study: Coffee Shop

This case study came about during my reading of Chapter 3 of
_Head First DesignPatterns_ titled "Decorating Objects". I had already
previously implemented the decorator pattern, but this chapter of the book
introduced me to the coffee shop idea and I wanted to make it a case study!

## Design Patterns

Unlike my previous case studies, this one is specific to one pattern: Decorator.

## Design Principles:
* Single Responsibility Principle
* Open/Closed Principle
* Dependency Inversion Principle
* Interface Segregation Principle
* Liskov Substitution Principle
* Low Coupling
* DRY
* Composition over Inheritance

##Overview of Coffee Shop:
The general idea is that each beverage has three properties:
* Description
* Cost
* Size

However, each beverage can have any number of condiments. Your coffee might
have Milk, double Mocha, and Whip topping. This case study utilizes the
Decorator pattern in order to allow changing of composition at runtime
rather than compile time. This is textbook composition over inheritance.

One side effect of using the Decorator pattern is that you end up with a
bunch of small classes. I think this is great personally, but it definitely
depends on your use-case as I imagine there are situations where this could
be a nightmare with hundreds of files to represent all of the different
compositions.
