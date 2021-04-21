IDIR = /usr/include
CC=gcc
CFLAGS=-g -Wall -I$(IDIR)

ODIR = .
LDIR = .

LIBS=-lmicrohttpd


#_DEPS = myfcc.h
#DEPS = $(patsubst %,$(IDIR)/%,$(_DEPS))

T1 = hellobrowser
_OBJ1 = $(T1).o 
OBJ1 = $(patsubst %,$(ODIR)/%,$(_OBJ1))

# T2 = random-test-client
# _OBJ2 = $(T2).o
# OBJ2 = $(patsubst %,$(ODIR)/%,$(_OBJ2))
# 
# T3 = unit-test-server
# _OBJ3 = $(T3).o unit-test.h
# OBJ3 = $(patsubst %,$(ODIR)/%,$(_OBJ3))
# 
# T4 = unit-test-client
# _OBJ4 = $(T4).o unit-test.h
# OBJ4 = $(patsubst %,$(ODIR)/%,$(_OBJ4))
# 
# T5 = version
# _OBJ5 = $(T5).o 
# OBJ5 = $(patsubst %,$(ODIR)/%,$(_OBJ5))
# 
# T6 = bandwidth-server-one
# _OBJ6 = $(T6).o 
# OBJ6 = $(patsubst %,$(ODIR)/%,$(_OBJ6))
# 
# T7 = bandwidth-server-many-up
# _OBJ7 = $(T7).o 
# OBJ7 = $(patsubst %,$(ODIR)/%,$(_OBJ7))
# 
# T8 = bandwidth-client
# _OBJ8 = $(T8).o 
# OBJ8 = $(patsubst %,$(ODIR)/%,$(_OBJ8))

$(ODIR)/%.o: %.c $(DEPS)
	$(CC) $(CFLAGS) -c -o $@ $< 

$(T1): $(OBJ1)
	$(CC) $(CFLAGS) -o $@ $^ $(LIBS)

$(T2): $(OBJ2)
	$(CC) $(CFLAGS) -o $@ $^ $(LIBS)

$(T3): $(OBJ3)
	$(CC) $(CFLAGS) -o $@ $^ $(LIBS)

$(T4): $(OBJ4)
	$(CC) $(CFLAGS) -o $@ $^ $(LIBS)

$(T5): $(OBJ5)
	$(CC) $(CFLAGS) -o $@ $^ $(LIBS)

$(T6): $(OBJ6)
	$(CC) $(CFLAGS) -o $@ $^ $(LIBS)

$(T7): $(OBJ7)
	$(CC) $(CFLAGS) -o $@ $^ $(LIBS)

$(T8): $(OBJ8)
	$(CC) $(CFLAGS) -o $@ $^ $(LIBS)

all: $(T1) $(T2) $(T3) $(T4) $(T5) $(T6) $(T7) $(T8)

.PHONY: clean

clean:
	rm -f ./*.o *~ ./*~ $(T1) $(T2) $(T3) $(T4) $(T5) $(T6) $(T7) $(T8)
