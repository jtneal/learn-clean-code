# Case Study: Bowling

## Design Patterns:
* Template Method
* Strategy
* Abstract Factory
* Iterator
* Null Object

##Overview of Bowling Scoring:
* You get two throws in each frame to try to knock down all ten pins.
* If you knock down all ten pins in the final frame, you get a bonus throw.
* Knocking down all ten pins in your first throw is a strike.
  * A strike adds the number of pins from your next two throws.
* Knocking down all ten pins in two throws is a spare.
  * A spare adds the number of pins from your next throw.

##Design Process
The code did not start off the way you see it now. First, I utilized
test-driven development by writing my tests first. At the beginning, the
Game class had multiple responsibilities: it handled game mechanics, iterator
functionality, and scoring. Eventually, I abstracted out the scoring to a
Scorer class, and the iterator functionality to a FrameCollection.

At one point, I realized I was doing a lot of isset checks that could be
removed if the FrameCollection simply returned a NullFrame. So I wrote up the
NullFrame class to return what you'd expect from a non-existent frame.

Additionally, I thought that there may be some alternative scoring method
in the future, and users would want to plugin their scoring algorithm
instead of using the standard one. So I created a ScorerInterface and
utilized that within the Game class using the Strategy pattern.

Another area that evolved over time was the Frame class. I started off with
just a Frame class, but eventually the Game class had a lot of complicated
logic due to the final frame being special. Thus, I utilized the Template Method
pattern by making Frame an abstract class, and allowing NormalFrame and FinalFrame
to define their algorithm for determining if the frame is considered complete.

One of my last minute additions was the AbstractFrameFactory and FrameFactory.
These classes utilize the Abstract Factory pattern to allow users to plugin
a different FrameFactory if they so choose.
